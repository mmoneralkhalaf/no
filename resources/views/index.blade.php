<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
@extends('layouts.app')
@section('content')
    <header>
        <h1>Blog</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="post.html">Post</a></li>
                <li><a href="user.html">User</a></li>
            </ul>
        </nav>
    </header>
    
    @extends('layouts.app')
@section('content')
    <div class="container">
    @foreach ($posts as $post)
        <div class="post">
            <h2 >{{$post->title }} User 1's Post</h2>
            <p {{ $post['content'] }}>This is a sample blog post.</p>
            <a href="{{ route('post.show', $post['id']) }}">Read More</a>
        </div>
        <div class="post">
            <h2>User 2's Post</h2>
            <p>This is another sample blog post.</p>
        </div>
        @endforeach
    </div>
    @endsection
</body>
</html>