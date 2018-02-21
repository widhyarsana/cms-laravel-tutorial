@extends('layouts.app')



@section('title')
    <title>Contact</title>
@stop

@section('content')

    <h1>Contact Page</h1>


    @if(count($people)>0)
    <ul>

        @foreach($people as $person)

            <li> {{ $person }}</li>

        @endforeach

    </ul>
    @endif
@stop


@section('footer')


@stop
