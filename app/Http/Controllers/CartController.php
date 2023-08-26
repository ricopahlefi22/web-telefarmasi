<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CartController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Keranjang';

        if ($request->ajax()) {
            return DataTables::of(Cart::all())
                ->addIndexColumn()
                ->addColumn('user', function (Cart $cart) {
                    return $cart->user->name;
                })
                ->addColumn('product', function (Cart $cart) {
                    return $cart->product->name;
                })
                ->addColumn('action', function (Cart $cart) {
                    // $btn = '<button data-id="' . $cart->id . '"  class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save edit" title="Edit Jumlah Barang"><i class="fa fa-edit" aria-hidden="true"></i></button> ';
                    $btn = '<button data-id="' . $cart->id . '"  class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save delete"><i class="icon-trash" aria-hidden="true"></i></button> ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.cart.index', $data);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'quantity' => 'required',
            ],
            [
                'quantity.required' => 'Mohon isi kolom kategori',
            ]
        );

        $data = Cart::updateOrCreate([
            'id' => $request->id,
        ], [
            'quantity' => $request->quantity,
        ]);

        if ($request->id != $data->id) {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Data telah ditambahkan',
            ]);
        } else {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Data telah diperbaharui.',
            ]);
        }
    }

    function check(Request $request)
    {
        $data = Cart::findOrFail($request->id);

        return response()->json($data);
    }

    function destroy(Request $request)
    {
        $data = Cart::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah dihapus dari sistem.',
        ]);
    }
}
