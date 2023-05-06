<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard()
    {
        $data['title'] = 'Data Administrator';

        return view('admin.dashboard', $data);
    }
}
