<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index() {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

    public function show($id) {
        $comment = Comment::find($id);
        return view('comments.show', compact('comment'));
    }

    public function create() {
        return view('comments.create');
    }

    public function store(Request $request) {
        Comment::create($request->all());
        return redirect()->route('comments.index');
    }

    public function edit($id) {
        $comment = Comment::find($id);
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id) {
        $comment = Comment::find($id);
        $comment->update($request->all());
        return redirect()->route('comments.index');
    }

    public function destroy($id) {
        Comment::destroy($id);
        return redirect()->route('comments.index');
    }

}
