@extends('template.template');
@section('content')
  <div class="navigation-buttons">
    <a href="{{route("home")}}"><button>home</button></a>
    <a href="{{route("comics.create")}}"><button>add comic</button></a>
  </div>

  <div class="container grid-col-4">
      @foreach ($comics as $element)
          <div class="flex-column-center">
            <img class="thumb" src="{{$element->thumb}}" alt="">
            <h5><a href="{{route("comics.show", $element->id )}}">{{$element->title}}</a></h5>
            <span>{{$element->price}}</span>
            <span>{{$element->sale_date}}</span>
            <span>{{$element->type}}</span>
          </div>
      @endforeach
  </div>

@endsection
