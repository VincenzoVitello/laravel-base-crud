@extends('template.base')

@section('title')
    volume
@endsection

@section('content')
  <h1>{{$comic->title}}</h1>
  <p>{{$comic->description}}</p>
  <a href="{{route("comics.index")}}"><button type="button" class="back_button">back</button></a>
  <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="show_button">modifica</button></a>

@endsection