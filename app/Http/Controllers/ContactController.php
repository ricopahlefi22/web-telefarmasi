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
        // dd($request->all());
        if ($request->file('logo')) {
            $path = 'public/logo/';
            $file = $request->file('logo');
            $file_name = Str::random(5) . time() . '_' . $file->getClientOriginalName();

            $file->storeAs($path, $file_name);
            $logo = "storage/logo/" . $file_name;
        }

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
