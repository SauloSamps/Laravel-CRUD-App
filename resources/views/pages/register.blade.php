@extends('layouts.app')

@section('content')


    <div class="">
        <h2>REGISTER</h2>
        <P>
            <form>
                <div class="form-group">
                    <label for="nome">First Name</label>
                    <input type="password" class="form-control" id="nome" placeholder="First Name">
                </div>

                <div class="form-group">
                    <label for="sobrenome">Last Name</label>
                    <input type="password" class="form-control" id="sobrenome" placeholder="Last Name">
                </div>

                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                {{-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> --}}
                
                
                
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </P>
    </div>



@endsection
