@extends('template.template');
@section('content')
    <a href="{{route("comics.index")}}"><button>back to list</button></a>
    <a href="{{route("home")}}"><button>home</button></a>
    <h1>{{$comic->title}}</h1>
    <p>{{$comic->description}}</p>
    <img src="{{$comic->thumb}}" alt="">
    <p>{{$comic->price}} $</p>
    <p>{{$comic->series}}</p>
    <p>{{$comic->sale_date}}</p>
    <p>{{$comic->type}}</p>

    <a href="#"><button>Edit</button></a>
@endsection