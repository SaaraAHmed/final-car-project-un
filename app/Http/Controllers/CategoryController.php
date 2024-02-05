<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Car;
use App\Traits\Common;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
  
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('admin.categories');
        $categories = Category::get();
        // print_r('categories');
        return view('admin.categories', compact('categories'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $categories = Category::select('id')->get();
        // return view('admin.createCategory', compact('categories'));
        return view('admin.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
        'categoryName'   => 'required',
        ]);
        Category :: create($data);
        return 'true';
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
        $categories = Category::findOrFail($id);
        return view('admin.editCategory', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'categoryName'   => 'required',
          
        ]);
        Category::where('id', $id)->update($data);
        return 'true';
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::where('id', $id)->delete();
        return 'true';
    }
}
