@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to myapp</h1>
        <p>Choose one of the options below:</p>
        <p>
            <a href="/login" class="btn btn-primary btn-lg" role="button">Log in</a>
            <a href="/register" class="btn btn-success btn-lg" role="button">Register</a>
        </p>
    </div>
@endsection