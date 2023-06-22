<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard()
    {
        $data['title'] = 'Beranda';

        return view('admin.dashboard', $data);
    }
}
