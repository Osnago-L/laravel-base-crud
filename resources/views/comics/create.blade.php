@extends('template.template');
@section('content')
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title"><br>

        <label for="description">Description</label><br>
        <input type="text" id="description" name="description"><br><br>

        <label for="thumb">Thumb</label><br>
        <input type="text" id="thumb" name="thumb"><br><br>

        <label for="price">Price</label><br>
        <input type="price" id="price" name="price"><br><br>

        <label for="series">Series</label><br>
        <input type="text" id="series" name="series"><br><br>

        <label for="sale_date">Sale Date:</label><br>
        <input type="text" id="sale_date" name="sale_date"><br><br>

        <label for="type">Type</label><br>
        <input type="text" id="type" name="type"><br><br>

        <input type="submit" value="Submit">
    </form> 
@endsection