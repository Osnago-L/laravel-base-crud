@extends('template.template');
@section('content')
    <form action="{{route('comics.update',$comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" value="{{$comic->title}}"><br>

        <label for="description">Description</label><br>
        <input type="text" id="description" name="description" value="{{$comic->description}}"><br><br>

        <label for="thumb">Thumb</label><br>
        <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}"><br><br>

        <label for="price">Price</label><br>
        <input type="price" id="price" name="price" value="{{$comic->price}}"><br><br>

        <label for="series">Series</label><br>
        <input type="text" id="series" name="series" value="{{$comic->series}}"><br><br>

        <label for="sale_date">Sale Date:</label><br>
        <input type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}"><br><br>

        <label for="type">Type</label><br>
        <input type="text" id="type" name="type" value="{{$comic->type}}"><br><br>

        <input type="submit" value="Submit">
    </form> 
@endsection