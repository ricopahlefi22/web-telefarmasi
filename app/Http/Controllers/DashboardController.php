<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard()
    {
        $data['title'] = 'Beranda';
        $data['product_count'] = Product::count();
        $data['article_count'] = Article::count();
        $data['user_count'] = User::count();
        $data['order_count'] = Order::where('status', '!=', 'Belum Dibayar')->count();

        return view('admin.dashboard', $data);
    }
}
