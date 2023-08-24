<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;

class ChatController extends Controller
{
    function index(Request $request)
    {
        $data['title'] = 'Data Konsultasi';
        $data['list_chat'] = User::whereHas('chat')->get();

        if ($request->id) {
            $data['user_room'] = User::findOrFail(Crypt::decrypt($request->id));
            $data['chats'] = Chat::where('user_id', $data['user_room']->id)->get();
        }

        return view('admin.chat', $data);
    }

    function sendMessage(Request $request)
    {
        $image = null;
        if ($request->file('image')) {
            $path = 'public/chat-images/';
            $file = $request->file('image');
            $file_name = Str::random(5) . time() . '_' . $file->getClientOriginalName();

            $file->storeAs($path, $file_name);
            $image = "storage/chat-images/" . $file_name;
        }

        $data = new Chat();
        $data->status = $request->status;
        $data->user_id = $request->user_id;
        $data->message = $request->message;
        $data->image = $image;
        $data->save();


        return response()->json('Pesan Terkirim');
    }

    function readChat(Request $request)
    {
        $data['chats'] = Chat::where('user_id', Crypt::decrypt($request->id))->get();

        return view('admin.chat-scrolling', $data);
    }
}
