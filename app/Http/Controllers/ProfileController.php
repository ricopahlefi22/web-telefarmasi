<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Admin;

class ProfileController extends Controller
{
    function admin()
    {
        $data['title'] = 'Profil Saya';
        return view('admin.profile', $data);
    }

    function editProfileAdmin(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required',
            ],
            [
                'name.required' => 'Mohon isi kolom nama',
                'email.required' => 'Mohon isi kolom email',
                'email.email' => 'Format email tidak sesuai',
                'phone_number.required' => 'Mohon isi kolom nomor handphone',
            ]
        );

        $photo = $request->hidden_photo;

        if ($request->file('photo')) {
            $path = 'public/admin-photos/';
            $file = $request->file('photo');
            $file_name = Str::random(2) . time() . '.' . $file->getClientOriginalExtension();

            $file->storeAs($path, $file_name);
            $photo = "storage/admin-photos/" . $file_name;
        }

        $data = Admin::findOrFail($request->id);
        $data->name = ucwords(strtolower($request->name));
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->photo = $photo;
        $data->update();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah diperbaharui.',
        ]);
    }

    function changePasswordAdmin(Request $request)
    {
        $request->validate(
            [
                'old_password' => 'required',
                'new_password' => 'required|min:8',
                'confirm_password' => 'required|same:new_password',
            ],
            [
                'old_password.required' => 'Mohon isi kolom kata sandi lama',
                'new_password.required' => 'Mohon isi kolom kata sandi baru',
                'confirm_password.required' => 'Mohon isi kolom konfirmasi kata sandi',
                'confirm_password.same' => 'Konfirmasi kata sandi tidak sesuai',
            ]
        );

        $data = Admin::findOrFail($request->id);
        $data->password = bcrypt($request->new_password);
        $data->save();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Kata sandi telah diganti.',
        ]);
    }
}
