@extends('layouts.app')



@section('title')
    <title>Create Data</title>
@stop

@section('content')
    <h1>Create Post</h1>


    {!! Form::open(['method' => 'POST', 'action' => 'PostController@store', 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::file('file', ['class'=> 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class'=> 'form-control', 'placeholder' => 'kamu']) !!}
        </div>

            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@stop

@if(count($errors)>0)

    <div class="alert alert-danger"></div>
        <ul>

            @foreach($errors->all() as $error)

                <li>{{$error}}</li>

            @endforeach

        </ul>
@endif
{{--
@section('content')
    <h1>Create Post</h1>

    <form action="/posts" method="post">

        <input type="text" name="title" placeholder="enter title">

        <input type="submit" name="submit" value="Submit">
        <input type="hidden" value="{{ Session::token() }}" name="_token">
    </form>
@stop
--}}


@section('footer')


@stop
