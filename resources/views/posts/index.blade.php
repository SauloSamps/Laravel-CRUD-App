@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach($posts as $post)
            <div class="well jumbotron text-center">
               <h2><a style="text-decoration:none;" href="posts/{{$post->id}}">{{$post->title}}</a></h2>
                <small>Created on {{$post->created_at}}</small>
                <p><small>Written by {{$post->user->name}}</small></p>
            </div>
        @endforeach
        <div class="d-flex justify-content-center">
                {{ $posts->links('vendor.pagination') }}
        </div>
    @else
        <p>No posts found</p>
    @endif
@endsection