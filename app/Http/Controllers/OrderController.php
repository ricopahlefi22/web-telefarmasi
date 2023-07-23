<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Produk';

        if ($request->ajax()) {
            return DataTables::of(Order::all())
                ->addIndexColumn()
                ->addColumn('action', function (Order $product) {
                    $btn = '<a href="products/detail/' . $product->id . '"  class="dropdown-item info"><i class="fa fa-eye"></i> Lihat</a> ';
                    $btn .= '<a href="products/edit/' . $product->id . '"  class="dropdown-item edit"><i class="icon-pencil""></i> Edit</a> ';

                    $btn .= '<button data-id="' . $product->id . '"  class="dropdown-item delete"><i class="icon-trash""></i> Hapus</button> ';

                    $btnColor = 'btn-dark';

                    if (is_null($product->published_at)) {
                        $btnColor = 'btn-outline-dark';
                    }
                    return '<div role="group">
                                <button id="btnDropdown" type="button" class="btn ' . $btnColor . '" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnDropdown">' .
                        $btn
                        . '</div>
                            </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.products.index', $data);
    }

    function create()
    {
        $data['title'] = 'Buat Produk';

        return view('admin.products.form-modal', $data);
    }

    function detail(Request $request)
    {
        $data['title'] = 'Edit Produk';
        $data['product'] = Order::findOrFail($request->id);

        return view('admin.products.detail', $data);
    }

    function edit(Request $request)
    {
        $data['title'] = 'Edit Produk';
        $data['product'] = Order::findOrFail($request->id);

        return view('admin.products.form-modal', $data);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'name' => ($request->id) ? 'required' : 'required|unique:products',
                'price' => 'required',
                'category_id' => 'required',
                'description' => 'required',
                'image' => ($request->id) ? '' : 'required',
            ],
            [
                'name.required' => 'Mohon isi kolom nama',
                'price.required' => 'Mohon lengkapi harga produk',
                'category_id.required' => 'Mohon isi kolom kategori produk',
                'description.required' => 'Mohon lengkapi deskripsi',
                'image.required' => 'Mohon lengkapi gambar produk',
            ],
        );

        $image = $request->hidden_image;

        if ($request->file('image')) {
            $path = 'public/product-images/';
            $file = $request->file('image');
            $file_name = Str::random(5) . time() . '_' . $file->getClientOriginalName();

            $file->storeAs($path, $file_name);
            $image = "storage/product-images/" . $file_name;
        }

        $data = Order::updateOrCreate([
            'id' => $request->id,
        ], [
            'image' => $image,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        if ($request->id != $data->id) {
            return response()->json([
                'code' => 200,
                'status' => 'Berhasil!',
                'message' => 'Produk telah ditambahkan.',
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
        $data = Order::findOrFail($request->id);

        return response()->json($data);
    }

    function publish(Request $request)
    {
        $data = Order::findOrFail($request->id);
        $data->published_at = Carbon::now();
        $data->update();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah diposting.',
        ]);
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
