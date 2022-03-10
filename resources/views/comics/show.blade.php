@extends('template.base')

@section('title')
    volume
@endsection

@section('content')
  <h1>{{$comic->title}}</h1>
  <p>{{$comic->description}}</p>
@endsection