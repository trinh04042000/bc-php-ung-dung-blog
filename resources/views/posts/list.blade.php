
@extends('home')
@section('title', 'My Blog')
@section('content')

    <a class="navbar-brand">My Blog</a>

    <p>
        <a href="{{route('posts.create')}}" class="btn btn-primary">Create new post</a>
    </p>
    <ul>

        <?php foreach ($posts as $post): ?>
        <li>
            <h2><a href="{{route('posts.view', $post->id)}}">{{ $post->title }}</a></h2>
            <span>{{ $post->created }}</span>
            <p>{{ $post->teaser }}</p>
            <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary btn-sm">Update</a>
            <a href="{{route('posts.destroy', $post->id)}}" class="btn btn-warning btn-sm" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a>

        </li>
        <?php endforeach; ?>
    </ul>

@endsection
