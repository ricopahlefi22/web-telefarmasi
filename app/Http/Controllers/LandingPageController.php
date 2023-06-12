<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\WebConfig;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function index()
    {
        $data['articles'] = Article::orderBy('created_at')->take(5)->get();
        // $data['web'] = WebConfig::first();

        return view('landing-page.index', $data);
    }

    function detail(Request $request){
        $data['article'] = Article::where('slug', $request->slug)->firstOrFail();

        return view('landing-page.detail-blog', $data);
    }
}
