<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

        if($checkCart){
            $checkCart->quantity += $request->quantity;
            $checkCart->save();
        } else {
            $cart = new Cart;
            $cart->user_id = Auth::user()->id;
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

}
