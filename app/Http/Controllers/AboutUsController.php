<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\WebConfig;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    function about()
    {
        $data['articles'] = Article::whereNotNull('published_at')->orderBy('created_at')->take(5)->get();
        return view('landing-page.about', $data);
    }

    function admin()
    {
        $data['title'] = 'Tentang Kami';
        $data['web_config'] = WebConfig::first();

        return view('admin.about', $data);
    }

    function store(Request $request)
    {
        $data = WebConfig::first();
        $data->about = $request->about;
        $data->update();

        return response()->json([
            'code' => 200,
            'status' => 'Berhasil!',
            'message' => 'Data telah diperbaharui.',
        ]);
    }
}
