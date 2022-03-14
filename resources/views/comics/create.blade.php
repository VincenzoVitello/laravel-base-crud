@extends('template.base')

@section('title')
aggiungi un fumetto
@endsection

@section('content')
<form action="{{route('comics.store')}}" method="post">

    @csrf
    <div>
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" value=""><br>
        
    </div>
    

    <label for="description">Description</label><br>
    <input type="text" id="description" name="description" value="{{old('description')}}"><br>

    <label for="thumb">Thumb</label><br>
    <input type="text" id="thumb" name="thumb" value="{{old('thumb')}}"><br>

    <label for="price">Price</label><br>
    <input type="price" id="price" name="price" value="{{old('price')}}"><br>

    <label for="series">Series</label><br>
    <input type="text" id="series" name="series" value="{{old('series')}}"><br>

    <label for="sale_date">Sale Date:</label><br>
    <input type="text" id="sale_date" name="sale_date" value="{{old('sale_date')}}"><br>

    <button type="submit" value="Submit">aggiungi</button>
</form> 
@if($errors->any())
    <div class="error_container">
        <ul>
            @foreach ($errors->all as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif   
@endsection