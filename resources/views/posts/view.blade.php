
@extends('home')
@section('title', 'My Blog')
@section('content')

    <a class="navbar-brand">My Blog</a>
    <p>
        <a href="{{route('posts.index')}}" class="btn btn-default">Return to posts</a>
    </p>

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->created }}</p>
    <p>{{ $post->teaser }}</p>
    <p>{{ $post->content }}</p>

@endsection
