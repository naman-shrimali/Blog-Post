@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-dark">Go Back</a>
<hr>
<h1>Create New Post</h1>
{!! Form::open(['action' => 'PostsController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class' => 'ckeditor form-control', 'placeholder' => 'Body Text '])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection