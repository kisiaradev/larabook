@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to Larabook</h1>
        <p>Welcome to the premier page to talk about Laravel with others> why dont you sign up and see what the fuss is all about.</p>
        <p>
            <a class="btn btn-lg btn-primary" href="{{ url('/registration') }}" role="button">Sign Up!</a>
        </p>
    </div>
@endsection

