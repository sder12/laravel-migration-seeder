@extends('layout.app')

@section('title', 'Home')

@section('content')
    <h1> Home </h1>
    <a href="{{ route('train')}}">Show all the trains</a>
@endsection