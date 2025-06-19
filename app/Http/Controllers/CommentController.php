<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use App\Models\Comment;


class CommentController extends Controller
{
    public function index()
{
    $comments = Comment::all();
    $users = User::all();
    $articles = Article::all();

    $commentCounts = Comment::selectRaw('user_id, COUNT(*) as total')
        ->groupBy('user_id')
        ->orderByDesc('total')
        ->with('user')
        ->get();

    return view('comments.index', compact('users', 'articles', 'comments', 'commentCounts'));
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

        $comment = new Comment();
        $comment->comment_content = $request->comment_content;
        $comment->comment_date = $request->comment_date;
        $comment->user_id = $request->user_id;
        $comment->article_id = $request->article_id;
        $comment->save();

        return redirect()->route('comments.index');
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
        $comment = Comment::findOrFail($id);
        $users = User::all();
        $articles = Article::all();
        return view('comments.edit', compact('comment', 'users','articles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comment = Comment::find($id);
        $comment->comment_content = $request->comment_content;
        $comment->comment_date = $request->comment_date;
        $comment->user_id = $request->user_id;
        $comment->article_id = $request->article_id;
        $comment->save();

        return redirect()->route('comments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('comments.index');
    }
}
