@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Post Title">
    <textarea name="body" placeholder="Post Content"></textarea>
    <button type="submit">Submit</button>
</form>
    @foreach ($posts as $post)
        <div class="post">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <a href="{{ route('posts.show', $post->id) }}">Read More</a>
        </div>
    @endforeach
</div>
@endsection