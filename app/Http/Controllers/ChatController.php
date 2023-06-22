<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    function index(){
        $data['title'] = 'Data Konsultasi';

        return view('admin.chat', $data);
    }
}
