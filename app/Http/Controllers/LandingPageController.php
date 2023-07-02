<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\WebConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    function articles()
    {
        $data['list_article'] = Article::all();

        return view('landing-page.blog', $data);
    }

    function categoryArticles(Request $request)
    {
        $data['article_category'] = ArticleCategory::where('category', Str::slug($request->category, ' '))->first();
        $data['list_article'] = Article::where('category_id', $data['article_category']->id)->get();

        return view('landing-page.blog', $data);
    }

    function detailArticle(Request $request)
    {
        $data['article'] = Article::where('slug', $request->slug)->firstOrFail();
        $data['related_articles'] = Article::where('id', '!=', $data['article']->id)->where('category_id', $data['article']->category_id)->whereNotNull('published_at')->orderBy('created_at')->take(2)->inRandomOrder()->get();

        return view('landing-page.detail-blog', $data);
    }

    function products()
    {
        $data['list_product'] = Product::all();

        return view('landing-page.product', $data);
    }

    function categoryProducts(Request $request)
    {
        $data['product_category'] = ProductCategory::where('category', 'LIKE', '%' . Str::slug($request->category, ' ') . '%')->first();
        $data['list_product'] = Product::where('category_id', $data['product_category']->id)->get();

        return view('landing-page.product', $data);
    }

    function detailProduct(Request $request)
    {
        $data['product'] = Product::where('id', $request->id)->firstOrFail();
        $data['related_products'] = Product::where('category_id', $data['product']->category_id)->orderBy('created_at', 'desc')->take(6)->get();

        return view('landing-page.detail-product', $data);
    }
}
