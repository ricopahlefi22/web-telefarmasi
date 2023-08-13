<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Cart;
use App\Models\Chat;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class LandingPageController extends Controller
{
    function index()
    {
        $data['articles'] = Article::whereNotNull('published_at')->orderBy('created_at')->take(5)->inRandomOrder()->get();
        $data['product_categories'] = ProductCategory::all();
        $data['random_products'] = Product::take(6)->get();
        $data['latest_products'] = Product::orderBy('created_at', 'desc')->take(8)->get();

        return view('landing-page.index', $data);
    }

    function articles()
    {
        $data['list_article'] = Article::all();

        return view('landing-page.article', $data);
    }

    function categoryArticles(Request $request)
    {
        $data['article_category'] = ArticleCategory::where('category', Str::slug($request->category, ' '))->first();
        $data['list_article'] = Article::where('category_id', $data['article_category']->id)->get();

        return view('landing-page.article', $data);
    }

    function detailArticle(Request $request)
    {
        $data['article'] = Article::where('slug', $request->slug)->firstOrFail();
        $data['related_articles'] = Article::where('id', '!=', $data['article']->id)->where('category_id', $data['article']->category_id)->whereNotNull('published_at')->orderBy('created_at')->take(2)->inRandomOrder()->get();

        return view('landing-page.detail-article', $data);
    }

    function products()
    {
        $data['list_product'] = Product::all();

        return view('landing-page.product', $data);
    }

    function categoryProducts(Request $request)
    {
        $data['product_category'] = ProductCategory::where('category', 'LIKE', '%' . Str::slug($request->category, ' ') . '%')->first();
        $data['list_product'] = Product::where('category_id', $data['product_category']->id)->get();

        return view('landing-page.product', $data);
    }

    function detailProduct(Request $request)
    {
        $data['product'] = Product::where('id', $request->id)->firstOrFail();
        $data['related_products'] = Product::where('category_id', $data['product']->category_id)->orderBy('created_at', 'desc')->take(6)->get();

        return view('landing-page.detail-product', $data);
    }

    function checkProduct(Request $request)
    {
        $data = Product::findOrFail($request->id);

        return response()->json($data);
    }

    function addToCartProduct(Request $request)
    {
        $data = Product::findOrFail($request->product_id);

        $checkCart = Cart::where('product_id', $request->product_id)->first();

        if ($checkCart) {
            $checkCart->quantity += $request->quantity;
            $checkCart->save();
        } else {
            $cart = new Cart;
            $cart->user_id = Auth::guard('user')->user()->id;
            $cart->product_id = $request->product_id;
            $cart->quantity = $request->quantity;
            $cart->save();
        }

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Produk berhasil ditambahkan ke keranjang.',
            'data' => $data,
            'html' => view('landing-page.sections.cart')->render(),
        ]);
    }

    function deleteToCartProduct(Request $request)
    {
        $data = Cart::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Produk telah dihapus dari keranjangmu.',
        ]);
    }

    function cart()
    {
        $data['carts'] = Cart::where('user_id', Auth::guard('user')->user()->id)->get();
        return view('landing-page.cart', $data);
    }

    function chat()
    {
        $data['chats'] = Chat::where('user_id', Auth::guard('user')->user()->id)->get();
        return view('landing-page.chat', $data);
    }

    function readChat()
    {
        $data['chats'] = Chat::where('user_id', Auth::guard('user')->user()->id)->get();
        return view('landing-page.sections.chat-scrolling', $data);
    }

    function checkout(Request $request)
    {
        $data['user'] = User::findOrFail($request->user_id);

        for ($i = 0; $i < count($request->product_id); $i++) {
            $products[] = [
                'product_id' => $request->product_id[$i],
                'quantity' => $request->quantities[$i],
            ];
        }
        $data['order'] = new Order;
        $data['order']->user_id = $request->user_id;
        $data['order']->total_price = $request->total_price;
        $data['order']->products = json_encode($products);
        $data['order']->status = "Belum Dibayar";
        $data['order']->save();

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => Str::random(5),
                'gross_amount' => $request->total_price,
            ),
            'customer_details' => array(
                'name' => $data['user']->name,
                'email' => $data['user']->email,
            ),
        );

        $data['snapToken'] = \Midtrans\Snap::getSnapToken($params);

        return response()->json($data);
    }

    function changeStatus(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $order = Order::findOrFail($request->order_id);
        $order->update(['status' => 'Sudah Dibayar']);

        $response = Http::asForm()->post('https://wa.srv2.wapanels.com/send-message', [
            'api_key' => '0GxB0JURoGbukwlxok6sY9DKhnyjQTvy',
            'sender' => '6285171121070',
            'number' => $user->phone_number,
            'message' => "Hi! Kami telah menerima pembayaranmu sebesar Rp. " . number_format($order->total_price) . ".\nMohon kirimkan alamat anda agar kami dapat mengirimkan obat yang sudah anda pesan.\n\n*Apotek Desta Farma*",
        ]);

        return response()->json([
            'status' => 'Pembayaran Berhasil',
            'message' => 'Terima kasih telah percaya pada kami.',
        ]);
    }

    function orders()
    {
        $data['title'] = 'Pesanan Saya';
        $data['orders'] = Order::where('user_id', Auth::user()->id)->get();
        return view('landing-page.profile', $data);
    }

    function ordersInvoice(Request $request)
    {
        $data['order'] = Order::findOrFail($request->id);

        return view('landing-page.invoice', $data);
    }
}
