<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\WebConfig;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Produk';

        if ($request->ajax()) {
            return DataTables::of(Order::all())
                ->addIndexColumn()
                ->addColumn('user', function (Order $order) {
                    return $order->user->name;
                })
                ->addColumn('products', function (Order $order) {
                    $products = '';
                    foreach (json_decode($order->products, true) as $product) {
                        $products .= '<li>' . Product::findOrFail($product['product_id'])->name . '</li>';
                    }

                    return '<ul>' . $products . '</ul>';
                })
                ->addColumn('total_price', function (Order $order) {
                    return 'Rp. ' . str_replace(',', '.', number_format($order->total_price));
                })
                ->addColumn('status', function (Order $order) {
                    $badgeColor = '';

                    if ($order->status == 'Belum Dibayar') {
                        $badgeColor = 'badge-danger';
                    } else if ($order->status == 'Sudah Dibayar') {
                        $badgeColor = 'badge-primary';
                    } else if ($order->status == 'Sedang Diproses') {
                        $badgeColor = 'badge-dark';
                    } else {
                        $badgeColor = 'badge-success';
                    }
                    return '<span class="badge ' . $badgeColor . '">' . $order->status . '</span>';
                })
                ->addColumn('action', function (Order $order) {
                    $btn = '<a href="orders/detail/' . $order->id . '"  class="dropdown-item info"><i class="fa fa-eye"></i> Lihat</a> ';
                    if ($order->delivery == true) {
                        $btn .= '<button data-id="' . $order->id . '"  class="dropdown-item change-status-delivery-true"><i class="icon-pencil""></i> Ganti Status</button> ';
                    } else {
                        $btn .= '<button data-id="' . $order->id . '"  class="dropdown-item change-status-delivery-false"><i class="icon-pencil""></i> Ganti Status</button> ';
                    }
                    $btn .= '<button data-id="' . $order->id . '"  class="dropdown-item delete"><i class="icon-trash""></i> Hapus</button> ';

                    return '<div role="group">
                                <button id="btnDropdown" type="button" class="btn btn-outline-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnDropdown">' .
                        $btn
                        . '</div>
                            </div>';
                })
                ->rawColumns(['user', 'products', 'total_price', 'status', 'action'])
                ->make(true);
        }

        return view('admin.orders.index', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = 'Detail Pesanan';
        $data['order'] = Order::findOrFail($request->id);
        $data['user'] = User::findOrFail($data['order']->user_id);

        return view('admin.orders.detail', $data);
    }

    function changeStatus(Request $request)
    {
        $data = Order::findOrFail($request->id);

        $products = '';

        foreach (json_decode($data->products, true) as $product) {
            $data_product = Product::findOrFail($product['product_id']);
            $products .= "- " . $data_product->name . ' = ' . $product['quantity'] . " Buah\n";
        }

        if ($request->status == 'Sudah Dibayar') {
            $response = Http::asForm()->post('https://wa.srv2.wapanels.com/send-message', [
                'api_key' => '0GxB0JURoGbukwlxok6sY9DKhnyjQTvy',
                'sender' => '6285171121070',
                'number' => $data->user->phone_number,
                'message' => "Hi! Kami telah menerima pembayaranmu sebesar Rp. " . number_format($data->total_price) . ".\n\n*Apotek Desta Farma*",
            ]);
        }

        if ($request->status == 'Siap Diambil') {
            $response = Http::asForm()->post('https://wa.srv2.wapanels.com/send-message', [
                'api_key' => '0GxB0JURoGbukwlxok6sY9DKhnyjQTvy',
                'sender' => '6285171121070',
                'number' => $data->user->phone_number,
                'message' => "Hi! saat ini pesanan anda:\n" . $products . " sudah siap diambil, silahkan datang ke apotek kami di " . WebConfig::first()->address . ".\n\n*Apotek Desta Farma*",
            ]);
        }

        if ($request->status == 'Dalam Perjalanan') {
            $response = Http::asForm()->post('https://wa.srv2.wapanels.com/send-message', [
                'api_key' => '0GxB0JURoGbukwlxok6sY9DKhnyjQTvy',
                'sender' => '6285171121070',
                'number' => $data->user->phone_number,
                'message' => "Hi! saat ini pesanan anda:\n" . $products . "*Sedang Dalam Perjalanan* ke alamat anda, mohon tunggu beberapa saat lagi.\n\n*Apotek Desta Farma*",
            ]);
        }

        if ($request->status == 'Selesai') {
            $response = Http::asForm()->post('https://wa.srv2.wapanels.com/send-message', [
                'api_key' => '0GxB0JURoGbukwlxok6sY9DKhnyjQTvy',
                'sender' => '6285171121070',
                'number' => $data->user->phone_number,
                'message' => "Terima kasih telah percayakan kebutuhan obatmu kepada *Apotek Desta Farma* 😊",
            ]);
        }

        $data->status = $request->status;
        $data->save();

        if ($response) {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Data telah diperbaharui.',
            ]);
        }
    }

    function check(Request $request)
    {
        $data = Order::findOrFail($request->id);

        return response()->json($data);
    }

    function destroy(Request $request)
    {
        $data = Order::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah dihapus dari sistem.',
        ]);
    }
}
