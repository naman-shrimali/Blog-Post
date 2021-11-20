<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','Blog-Post')}}</title>

    </head>
    <body>
        @extends('layouts.app')
        @section('content')
        <h1>{{$title}}</h1>
        <p>This is an About Page </p>
        @endsection
    </body>
</html>