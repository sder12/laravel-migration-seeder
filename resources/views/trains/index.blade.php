@extends('layout.app')

@section('title', 'Trains')

@section('content')
    <h1> Trains </h1>
    <a href="{{ route('home')}}">Back to Homepage</a>
    <hr>
    <h3>All the trains departing in the nearly future: </h3>
   @include('partials.card-train')
@endsection