<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ApiArticleController extends Controller
{
    /**
     * Display a listing of the resorce.
     */
    public function index()
    {
        $articles = Article::all();
        return response()->json($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $articles = new Article();
        $articles->title = $request->title;
        $articles->content = $request->content;
        $articles->save();
        return response()->json($articles);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $articles = Article::find($id);
        return response()->json($articles);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $articles = Article::find($id);
        return response()->Json($articles);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $articles = Article::find($id);
        $articles->update($request->all());
        return response()->json($articles);

    }

    public function destroy(string $id)
    {
        $articles = Article::find($id);
        $articles->delete();
        return response()->Json($articles);
    }
}
