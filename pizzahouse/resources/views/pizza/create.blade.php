@extends('layouts.app')
@section('content')
<div class="wrapper create-pizza">
    <form action="/pizza" method="POST">
        @csrf
        <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="name">
        <label for="type">Choose Pizza type</label>
            <select name="type" id="type">
                <option value="Margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="volcano">Volcano</option>
                <option value="veg supreme">Veg-Supreme</option>
            </select>
        <label for="base">Choose Base type</label>
            <select name="base" id="base">
                <option value="cheesy-crust">Cheesy crust</option>
                <option value="garlic-crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="thick">Thick</option>
            </select>
    <fieldset>
      <label>Extra Toppings : </label>
            <input type="checkbox" name="toppings[]" value="mushroom">Mushroom<br />
            <input type="checkbox" name="toppings[]" value="pepper">Pepper<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="olive">Olive<br />
    </fieldset>
            <input type="submit" name="" value="Order Pizza">
    <form>
</div>
@endsection