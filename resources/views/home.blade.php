@extends('layout.app')

@section('title', 'Home')

@section('content')
    <h1> Home </h1>
    <a href="{{ route('train')}}">See all the trains departing in the nearly future</a>
    <hr>
    <h3>Trains departing today: </h3>
    
    @include('partials.card-train')

@endsection