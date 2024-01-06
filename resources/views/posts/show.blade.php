@extends('layouts.app')

@section('content')
<h1 id="post-title">{{$post->title}}</h1>
<div>
    <div>{!!$post->body!!}</div>
</div>
<small>Written By {{$post->user->name}}</small><br>
<small>Created at {{$post->created_at}}</small>
<div style="margin-top: 70px">
    <a href="/posts" class="btn btn-dark">Go Back</a>
    @auth
        @if(Auth::user()->id === $post->user->id) <!-- Check if the current user is the post creator -->
            <a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>

            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE', 'class' => 'float-right']) !!}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
            {!! Form::close() !!}
        @endif
    @endauth
</div>

<style>
    h1:not(#post-title){
        font-size:30px;
    }
    h2{
        font-size:28px
    }
    p{
        font-size: 20px;
    }
</style>

@endsection
