<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - User Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
@extends('layouts.app')
@section('content')
    <header>
        <h1>User Profile</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="post.html">Post</a></li>
                <li><a href="user.html">User</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <div class="user-info">
            <h2>User Name</h2>
            <p>Bio: A brief bio about the user.</p>
        </div>

        <div class="user-posts">
            <h3>User's Posts</h3>
            <div class="post">
                <h2>Post 1</h2>
                <p>This is the first post by the user.</p>
            </div>
            <div class="post">
                <h2>Post 2</h2>
                <p>This is another post by the user.</p>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
