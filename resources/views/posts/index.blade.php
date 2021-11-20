@extends('layouts.app')
@section('content')
<h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row mt-2 mb-2">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%; border-radius:10px;" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8" justify="center" style="display:flex; align-items: center; justify-content:center;">
                       <div>
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                       </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else 
        <p>No Posts Available</p>
    @endif
@endsection
