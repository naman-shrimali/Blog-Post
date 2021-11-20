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
        @if(count($services) > 0)
            <ul class="list-group">
                @foreach($services as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        @endif
        @endsection
    </body>
</html>