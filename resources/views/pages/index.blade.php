@extends('layouts.app')
    @section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <h1>{{config('app.name','Blog-Post')}}</h1>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-warning btn-lg" href="/register" role="button">Register</a>
    </div>
    @endsection