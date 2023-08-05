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
                ->addColumn('action', function (Cart $user) {
                    $btn = '<button data-id="' . $user->id . '"  class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save edit" data-toggle="tooltip" data-original-title="Save"><i class="icon-pencil" aria-hidden="true"></i></button> ';
                    $btn .= '<button data-id="' . $user->id . '"  class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save delete" data-toggle="tooltip" data-original-title="Save"><i class="icon-trash" aria-hidden="true"></i></button> ';
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
                'category' => 'required',
            ],
            [
                'category.required' => 'Mohon isi kolom kategori',
            ]
        );

        $data = Cart::updateOrCreate([
            'id' => $request->id,
        ], [
            'category' => ucwords(strtolower($request->category)),
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
        foreach ($data->articles as $article) {
            $article->category_id = null;
            $article->published_at = null;
            $article->update();
        }

        $data->delete();


        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah dihapus dari sistem.',
        ]);
    }
}
