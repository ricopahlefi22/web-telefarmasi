<?php

namespace App\Http\Controllers;

use App\Models\WebConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    function contact()
    {
        return view('landing-page.contact');
    }

    function admin()
    {
        $data['title'] = 'Kontak';
        $data['web_config'] = WebConfig::first();

        return view('admin.contact', $data);
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ], [
            'name.required' => 'Mohon isi kolom nama',
            'address.required' => 'Mohon isi kolom alamat',
            'email.required' => 'Mohon isi kolom email',
            'phone_number.required' => 'Mohon isi kolom nomor handphone',
        ]);

        $data = WebConfig::first();
        $data->name = $request->name;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;
        $data->facebook = $request->facebook;
        $data->instagram = $request->instagram;
        $data->update();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah diperbaharui.',
        ]);
    }
}
