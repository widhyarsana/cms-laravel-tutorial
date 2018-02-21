@extends('layouts.app')



@section('title')
    <title>Edit Data</title>
@stop

@section('content')
    <h1>Edit Post</h1>

    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['PostController@update', $post->id]]) !!}

    <div class="form-group">

        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class'=> 'form-control', 'placeholder' => 'kamu']) !!}

    </div>

    {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

    {{--<form action="/posts/{{$post->id}}" method="post">

        <input type="hidden" name="_method" value="PUT">

        <input type="text" name="title" placeholder="enter title" value="{{$post->title}}">

        <input type="submit" name="submit" value="Update">
        <input type="hidden" value="{{ Session::token() }}" name="_token">
    </form>--}}


    {!! Form::model($post, ['method' => 'DELETE', 'action' => ['PostController@destroy', $post->id]]) !!}

    {!! Form::submit('Delete Post', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

    {{--<form action="/posts/{{$post->id}}" method="post">

        <input type="hidden" name="_method" value="DELETE">


        <input type="submit" name="submit" value="Delete">
        <input type="hidden" value="{{ Session::token() }}" name="_token">
    </form>--}}
@stop


@section('footer')


@stop
