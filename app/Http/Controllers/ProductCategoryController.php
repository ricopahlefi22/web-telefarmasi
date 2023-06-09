<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductCategoryController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Kategori Produk';

        if ($request->ajax()) {
            return DataTables::of(ProductCategory::all())
                ->addIndexColumn()
                ->addColumn('action', function (ProductCategory $user) {
                    $btn = '<button data-id="' . $user->id . '"  class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save edit" data-toggle="tooltip" data-original-title="Save"><i class="icon-pencil" aria-hidden="true"></i></button> ';
                    $btn .= '<button data-id="' . $user->id . '"  class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save delete" data-toggle="tooltip" data-original-title="Save"><i class="icon-trash" aria-hidden="true"></i></button> ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.product-category.index', $data);
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

        $data = ProductCategory::updateOrCreate([
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
        $data = ProductCategory::findOrFail($request->id);

        return response()->json($data);
    }

    function destroy(Request $request)
    {
        $data = ProductCategory::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah dihapus dari sistem.',
        ]);
    }
}
