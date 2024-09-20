<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - About</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
@extends('layouts.app')
@section('content')
    <header>
        <h1>About Us</h1>
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
        <div class="about-text">
            <h2>About This Blog</h2>
            <p>This blog is designed to share knowledge and opinions on various topics.</p>
        </div>
    </div>
    @endsection
</body>
</html>
