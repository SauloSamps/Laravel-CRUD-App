@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['\App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label ('title', 'Title')}}
            {{Form::text ('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>

        <div class="form-group">
            {{Form::label ('body', 'Body')}}
            {{Form::textarea ('body', $post->body, ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');

    </script>
@endsection