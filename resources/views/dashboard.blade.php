@extends('layouts.app')

@section('content')
<div class="container">
    <div id="login-message" class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center" style="margin-top: 40px">
        <h1>Your Blog Posts</h1>
        <!--This has a PHP variable passed in by the controller-->
        <p style="margin-top: 30px"><a class="btn btn-secondary btn-lg" href="/posts/create" role="button">Create Post</a></p>
        @if(count($posts) > 0)
        <table class="table table-striped">
            <tr>
                <th>Post Title</th>
                <th> Actions</th>
                <th></th>
            </tr>
            @foreach($posts as $post)
            <tr>
                <td><a style="text-decoration:none;" href="posts/{{$post->id}}">{{$post->title}}</a></td>
                <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                <td></td>
            </tr>
            @endforeach
        </table>
        @else
        <p>You have no posts yet. Create your first one!</p>
        @endif

    </div>
</div>


<script>
    setTimeout(function() {
        document.getElementById('login-message').classList.add('d-none');
    }, 2000); // Show after 5 seconds (5000 milliseconds)

</script>
@endsection
