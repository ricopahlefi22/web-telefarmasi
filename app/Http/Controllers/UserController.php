<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Pengguna';

        if ($request->ajax()) {
            return DataTables::of(User::all())
                ->addIndexColumn()
                ->addColumn('action', function (User $user) {
                    $btn = '<button data-id="' . $user->id . '"  class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save edit" data-toggle="tooltip" data-original-title="Save"><i class="icon-pencil" aria-hidden="true"></i></button> ';
                    $btn .= '<button data-id="' . $user->id . '"  class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-save delete" data-toggle="tooltip" data-original-title="Save"><i class="icon-trash" aria-hidden="true"></i></button> ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.user.index', $data);
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
            $path = 'public/user-photos/';
            $file = $request->file('photo');
            $file_name = Str::random(5) . time() . '_' . $file->getClientOriginalName();

            $file->storeAs($path, $file_name);
            $photo = "storage/user-photos/" . $file_name;
        }

        $data = User::updateOrCreate([
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
        $data = User::findOrFail($request->id);

        return response()->json($data);
    }

    function destroy(Request $request)
    {
        $data = User::findOrFail($request->id);
        $data->delete();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah dihapus dari sistem.',
        ]);
    }
}
