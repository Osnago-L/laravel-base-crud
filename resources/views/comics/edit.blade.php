@extends('template.template');
@section('content')
    <form action="{{route('comics.update',$comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="title">Title</label><br>
        <input type="text" id="title" name="title" value="{{$comic->title}}"><br>
        @error('title')
        <li class="alert">{{ $message }}</li>
        @enderror

        <label for="description">Description</label><br>
        <input type="text" id="description" name="description" value="{{$comic->description}}"><br><br>
        @error('description')
        <li class="alert">{{ $message }}</li>
        @enderror

        <label for="thumb">Thumb</label><br>
        <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}"><br><br>
        @error('thumb')
        <li class="alert">{{ $message }}</li>
        @enderror

        <label for="price">Price</label><br>
        <input type="price" id="price" name="price" 
        value=
            @if($errors->any())
                "{{old('price')}}"
            @else
                "{{$comic->price}}"
            @endif
        ><br><br>
        @error('price')
        <li class="alert">{{ $message }}</li>
        @enderror

        <label for="series">Series</label><br>
        <input type="text" id="series" name="series" value="{{$comic->series}}"><br><br>
        @error('series')
        <li class="alert">{{ $message }}</li>
        @enderror

        <label for="sale_date">Sale Date:</label><br>
        <input type="text" id="sale_date" name="sale_date" value="{{$comic->sale_date}}"><br><br>
        @error('sale_date')
        <li class="alert">{{ $message }}</li>
        @enderror

        <label for="type">Type</label><br>
        <input type="text" id="type" name="type" value="{{$comic->type}}"><br><br>
        @error('type')
        <li class="alert">{{ $message }}</li>
        @enderror

        <input type="submit" value="Edit">
    </form> 
@endsection