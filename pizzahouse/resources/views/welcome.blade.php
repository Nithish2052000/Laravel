@extends('layouts.layout')
@section('content')
<div class="content">
    <img src="img/pizza-house.png" alt="">
    <div class="title m-b-md">
        North's Best Pizza
    </div>
<p class="mssg">{{session('mssg')}}</p>    
<a href="/pizza/create">Order a Pizza</a>
</div>

@endsection
<!--
    div class="links">
        <a href="https://laravel.com/docs">Docs</a>
        <a href="https://laracasts.com">Laracasts</a>
        <a href="https://laravel-news.com">News</a>
        <a href="https://blog.laravel.com">Blog</a>
        <a href="https://nova.laravel.com">Nova</a>
        <a href="https://forge.laravel.com">Forge</a>
        <a href="https://vapor.laravel.com">Vapor</a>
        <a href="https://github.com/laravel/laravel">GitHub</a>
    </div>

-->