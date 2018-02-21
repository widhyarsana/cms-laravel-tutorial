@extends('layouts.app')



@section('title')
    <title>Post</title>
@stop

@section('content')
    <h1>Home</h1>
    <ul>

        @foreach($posts as $post)
            
            <div>
                <img src="images/{{$post->path}}" alt="">
                
            </div>

            <li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
        @endforeach


    </ul>

@stop


@section('footer')


@stop
