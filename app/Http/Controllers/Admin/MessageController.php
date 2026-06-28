<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $data = [
            'content' => 'admin.messages.index',
            'messages' => \App\Models\ContactMessage::orderBy('created_at', 'desc')->get()
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function show($id)
    {
        $message = \App\Models\ContactMessage::findOrFail($id);
        $message->update(['is_read' => true]);

        $data = [
            'content' => 'admin.messages.show',
            'message' => $message
        ];
        return view('admin.layouts.wrapper', $data);
    }
}
