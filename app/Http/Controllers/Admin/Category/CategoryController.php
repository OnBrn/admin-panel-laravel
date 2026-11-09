<?php

namespace App\Http\Controllers\admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(10);
        // $categories = Category::all()->paginate(10);

        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return View('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->all());
        return redirect()->route('admin.category.index')->with('alert-success', 'Category Created completed successFully!');
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
    public function edit(Category $category)
    {
        //

        return View('category.edite', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        // Category::update($request->all());
        $inputs = $request->all();
        $update = $category->update($inputs);
        // $category->save();
        return redirect()->route('admin.category.index')->with('alert-success', 'Edite Category completed successFully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('alert-success', 'delete Category completed successFully!');
    }


    public function status(Category $id)
    {
        $id->status = $id->status === 'Enable' ? 'Disable' : 'Enable';
        $id->save();
        return redirect()->back()->with('alert-success', 'Status change completed successFully!');
    }
}
