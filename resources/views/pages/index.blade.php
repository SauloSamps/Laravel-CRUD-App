
<!--This is index.blade.php-->

@extends('layouts.app') <!--layouts.app contains the HTML head and beginning of body--> 

@section('content') <!--This section is added to layouts.app when index() is called-->
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>  <!--This has a PHP variable passed in by the controller--> 
        <p>THIS IS A LARAVEL TEST</p>
        @guest
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>  <a class="btn btn-success btn-lg" href="/register" role="button">Register</a> </p>
        @endguest
        
    </div>
@endsection







