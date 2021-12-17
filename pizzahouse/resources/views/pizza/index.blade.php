@extends('layouts.app')
@section('content')

<div class="content">
    <div class="title m-b-md">
            Pizza
    </div>
    @foreach($pizzas as $pizza)
    <a href="/pizza/{{$pizza->id}}">
    <div>{{$pizza->type}}-{{$pizza->base}}--{{$pizza->name}}</div>
    </a>
    @endforeach
    
</div>
@endsection