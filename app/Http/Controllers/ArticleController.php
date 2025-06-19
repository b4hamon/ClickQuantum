<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $users = User::all();
        $articles = Article::all();
        $articlesByDate = Article::selectRaw('DATE(published_at) as date, COUNT(*) as total')
            ->whereNotNull('published_at')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();
        $chartData = $articlesByDate->toJson();
        return view('articles.index', compact('users', 'articles', 'articlesByDate', 'chartData'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $article = new Article();

        $article->title = $request->title;
        $article->content = $request->content;
        $article->published_at = $request->published_at;
        $article->user_id = $request->user_id;
        $article->save();

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::findOrFail($id);
        $users = User::all();
        return view('articles.edit', compact('article', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->published_at = $request->published_at;
        $article->user_id = $request->user_id;
        $article->save();

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}