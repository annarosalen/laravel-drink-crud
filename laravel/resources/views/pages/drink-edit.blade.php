@extends('layouts.main-layout')

@section('content')

    <form action="{{route('drink-update', $drink-> id)}}" method="POST" >

        @csrf
        @method('POST')
        
        <label for="name">NAME:</label>
        <input type="text" name="name" value="{{$drink -> name}}">
        <br>
        <label for="abv">ABV:</label>
        <input type="text" name="abv" value="{{$drink -> abv}}">
        <br>
        <label for="price">PRICE:</label>
        <input type="text" name="price" value="{{$drink -> price}}">

        <br>

        <input type="submit" value="UPDATE">

    </form>
    
@endsection