@extends('template.template');
@section('content')
<table>
    <tr>
      <th>id</th>
      <th>Title</th>
      <th>Description</th>
      <th>Thumb</th>
      <th>Price</th>
      <th>Series</th>
      <th>Sale_date</th>
      <th>Type</th>
    </tr>

    @foreach ($comics as $element)
        <tr>
            <td>{{$element->id}}</td>
            <td><a href="{{route("comics.show", $element->id )}}">{{$element->title}}</a></td>
            <td>{{$element->description}}</td>
            <td>{{$element->thumb}}</td>
            <td>{{$element->price}}</td>
            <td>{{$element->series}}</td>
            <td>{{$element->sale_date}}</td>
            <td>{{$element->type}}</td>
        </tr>
    @endforeach
  </table>
@endsection
