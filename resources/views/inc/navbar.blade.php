<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','Blog-Post')}}</title>

    </head>
    <body>
        {{-- <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            {{-- <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
              <span class="fs-4">{{config('app.name','Blog-Post')}}</span>
            </a> --}}
      
            {{-- <ul class="nav nav-pills">
              <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
              <li class="nav-item active"><a href="/services" class="nav-link ">Services</a></li>
              <li class="nav-item active"><a href="/posts" class="nav-link">Blogs</a></li>
              <li class="nav-item active"><a href="/about" class="nav-link">About</a></li>
              <li class="nav-item active"><a href="/posts/create" class="nav-link">Create Post</a></li>
            </ul>
          </header> --}}
          <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <strong>{{ config('app.name', 'Laravel') }}</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <ul class="nav nav-pills">
                      <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                      <li class="nav-item active"><a href="/services" class="nav-link ">Services</a></li>
                      <li class="nav-item active"><a href="/posts" class="nav-link">Blogs</a></li>
                      <li class="nav-item active"><a href="/about" class="nav-link">About</a></li>
                      <li class="nav-item active"><a href="/posts/create" class="nav-link">Create Post</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a href="/dashboard" class="dropdown-item">Dashboard</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </body>