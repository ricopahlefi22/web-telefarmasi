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
        $data['articles'] = Article::whereNotNull('published_at')->orderBy('created_at')->take(5)->inRandomOrder()->get();
        $data['product_categories'] = ProductCategory::all();
        $data['random_products'] = Product::take(6)->get();
        $data['latest_products'] = Product::orderBy('created_at', 'desc')->take(8)->get();

        return view('landing-page.index', $data);
    }

    function detailArticle(Request $request)
    {
        $data['article'] = Article::where('slug', $request->slug)->firstOrFail();
        $data['related_articles'] = Article::where('id', '!=', $data['article']->id)->where('category_id', $data['article']->category_id)->whereNotNull('published_at')->orderBy('created_at')->take(2)->inRandomOrder()->get();

        return view('landing-page.detail-blog', $data);
    }

    function detailProduct(Request $request)
    {
        $data['product'] = Article::where('id', $request->id)->firstOrFail();

        return view('landing-page.detail-product', $data);
    }
}
