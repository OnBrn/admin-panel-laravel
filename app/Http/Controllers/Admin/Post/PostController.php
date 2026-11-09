<?php

namespace App\Http\Controllers\admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Admin\posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = posts::orderBy('id', 'desc')->paginate(10);
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $postDelete = Posts::find($id);
        $postDelete->delete();
        return redirect()->back()->with('alert-success', 'Delete post completed successFully!');
    }


    public function status(Posts $id)
    {
        $id->status = $id->status === 'Enable' ? 'Disable' : 'Enable';
        $id->save();
        return redirect()->back()->with('alert-success', 'Status change completed successFully!');
    }
}
