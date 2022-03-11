@extends('template.base')

@section('title')
aggiungi un fumetto
@endsection

@section('content')
<form action="{{route('comics.store')}}" method="post">

    @csrf

    <label for="title">Title</label><br>
    <input type="text" id="title" name="title" value=""><br>

    <label for="description">Description</label><br>
    <input type="text" id="description" name="description" value=""><br>

    <label for="thumb">Thumb</label><br>
    <input type="text" id="thumb" name="thumb" value=""><br>

    <label for="price">Price</label><br>
    <input type="price" id="price" name="price" value=""><br>

    <label for="series">Series</label><br>
    <input type="text" id="series" name="series" value=""><br>

    <label for="sale_date">Sale Date:</label><br>
    <input type="text" id="sale_date" name="sale_date" value=""><br>

    <button type="submit" value="Submit">aggiungi</button>
</form> 
@endsection