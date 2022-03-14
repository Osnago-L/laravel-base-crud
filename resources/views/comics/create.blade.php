@extends('template.template');
@section('content')
    <form action="{{route('comics.store')}}" method="post">
        @csrf
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" value="{{old('title')}}"><br>
        @error('title')
        <li class="alert">{{ $message }}</li>
        @enderror

        <label for="description">Description</label><br>
        <input type="text" id="description" name="description" value="{{old('description')}}"><br><br>
        @error('description')
        <li class="alert">{{ $message }}</li>
        @enderror

        <label for="thumb">Thumb</label><br>
        <input type="text" id="thumb" name="thumb" value="{{old('thumb')}}"><br><br>
        @error('thumb')
        <li class="alert">{{ $message }}</li>
        @enderror

        <label for="price">Price</label><br>
        <input type="price" id="price" name="price" value="{{old('price')}}"><br><br>
        @error('price')
        <li class="alert">{{ $message }}</li>
        @enderror

        <label for="series">Series</label><br>
        <input type="text" id="series" name="series" value="{{old('series')}}"><br><br>
        @error('series')
        <li class="alert">{{ $message }}</li>
        @enderror

        <label for="sale_date">Sale Date:</label><br>
        <input type="text" id="sale_date" name="sale_date" value="{{old('sale_date')}}"><br><br>
        @error('sale_date')
        <li class="alert">{{ $message }}</li>
        @enderror

        <label for="type">Type</label><br>
        <input type="text" id="type" name="type" value="{{old('type')}}"><br><br>
        @error('type')
        <li class="alert">{{ $message }}</li>
        @enderror

        <input type="submit" value="Submit">
    </form> 

@endsection