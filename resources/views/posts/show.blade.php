@extends('layouts.app')



@section('title')
    <title>Post</title>
@stop

@section('content')
    <h1>Show Post</h1>

    <h1><a href="{{route('posts.edit', $post->id)}}">{{$post->title}}</a></h1>

@stop


@section('footer')


@stop
