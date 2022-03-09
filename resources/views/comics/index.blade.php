@extends('template.base')

@section('title')
    lista comics
@endsection

@section('content')
    <div class="container">
        @foreach($volumi as $volume)
            <div class="comic_card">
                <img src="{{$volume->thumb}}" alt="">
                <h3>{{$volume->title}}</h3>
                {{-- <p>{{$volume->description}}</p> --}}
                <p>Prezzo: {{$volume->price}}$</p>
                <p>Data di pubblicazione: {{$volume->sale_date}}</p>
            </div>
    @endforeach
    </div>
    
@endsection