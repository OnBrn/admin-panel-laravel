<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\posts;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Posts::orderBy('id', 'desc')->paginate(10);

        return view('index', compact('posts'));
    }

    public function status(posts $post)
    {
        $post->status = $post->status === 'Enable' ? 'Disable' : 'Enable';
        $post->save();
        return redirect()->route("admin.home")->with('alert-success', 'Status change completed successFully!');
    }
}
