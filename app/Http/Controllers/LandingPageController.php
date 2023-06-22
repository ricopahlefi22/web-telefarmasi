<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\WebConfig;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    function index()
    {
        $data['articles'] = Article::whereNotNull('published_at')->orderBy('created_at')->take(5)->get();
        $data['product_categories'] = ProductCategory::all();
        $data['random_products'] = Product::take(6)->get();
        $data['latest_products'] = Product::orderBy('created_at', 'desc')->take(8)->get();

        return view('landing-page.index', $data);
    }

    function detail(Request $request)
    {
        $data['article'] = Article::where('slug', $request->slug)->firstOrFail();

        return view('landing-page.detail-blog', $data);
    }
}
