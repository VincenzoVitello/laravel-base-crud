@extends('template.base')

@section('title')
    lista comics
@endsection

@section('content')
<a href="{{route("comics.create")}}"><button type="button" class="show_button">Aggiungi</button></a>

    <div class="container">
        @foreach($volumi as $volume)
            <div class="comic_card">
                <img src="{{$volume->thumb}}" alt="">
                <h3>{{$volume->title}}</h3>
                {{-- <p>{{$volume->description}}</p> --}}
                <p>Prezzo: {{$volume->price}}$</p>
                <p>Data di pubblicazione: {{$volume->sale_date}}</p>
                <div class="buttons_container">
                    <a href="{{route("comics.show", $volume->id)}}"><button type="button" class="show_button">vedi</button></a>
                    <a href="{{route("comics.edit", $volume->id)}}"><button type="button" class="show_button">modifica</button></a>
                    <form action="{{route("comics.destroy", $volume->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="delete_button">Elimina</button>
                    </form>
                </div>
            </div>
    @endforeach
    </div>
    
@endsection