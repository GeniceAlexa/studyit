<?php

namespace App\Http\Controllers;

class ChatController extends Controller
{
    public function index()
    {
        if (!session('user')) {
            return redirect('/login');
        }

        return view('chat');
    }
}