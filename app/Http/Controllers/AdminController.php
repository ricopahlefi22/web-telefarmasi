<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Administrator';

        if ($request->ajax()) {
            return DataTables::of(Admin::all())
                ->addIndexColumn()
                ->addColumn('action', function (Admin $admin) {
                    $btn = '<button data-id="' . $admin->id . '"  class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 edit" title="Edit"><i class="icon-pencil" aria-hidden="true"></i></button> ';
                    $btn .= '<button data-id="' . $admin->id . '"  class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 delete" title="Hapus"><i class="icon-trash" aria-hidden="true"></i></button> ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.administrator.index', $data);
    }

    function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
            ],
            [
                'name.required' => 'Mohon isi kolom nama',
                'email.required' => 'Mohon isi kolom email',
                'email.email' => 'Format email tidak sesuai',
            ]
        );

        $photo = $request->hidden_photo;

        if ($request->file('photo')) {
            $path = 'public/admin-photos/';
            $file = $request->file('photo');
            $file_name = Str::random(5) . time() . '_' . $file->getClientOriginalName();

            $file->storeAs($path, $file_name);
            $photo = "storage/admin-photos/" . $file_name;
        }

        $data = Admin::updateOrCreate([
            'id' => $request->id,
        ], [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('12341234'),
            'photo' => $photo,
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
        $data = Admin::findOrFail($request->id);

        return response()->json($data);
    }

    function destroy(Request $request)
    {
        $data = Admin::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah dihapus dari sistem.',
        ]);
    }
}
