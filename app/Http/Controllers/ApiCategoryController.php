<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ApiCategoryController extends Controller
{
    /**
     * Display a listing of the resorce.
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $categories = new Category();
        $categories->category_name = $request->category_name;
        $categories->save();
        return response()->json($categories);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Category::find($id);
        return response()->json($categories);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::find($id);
        return response()->Json($categories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $categories = Category::find($id);
        $categories->update($request->all());
        return response()->json($categories);

    }

    public function destroy(string $id)
    {
        $categories = Category::find($id);
        $categories->delete();
        return response()->Json($categories);
    }
}
