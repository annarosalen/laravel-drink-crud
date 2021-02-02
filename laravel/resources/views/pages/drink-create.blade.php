@extends('layouts.main-layout')

@section('content')

    <form action="{{route('drink-store')}}" method="POST">

        @csrf
        @method('POST')

        <label for="name">NAME:</label>
        <input type="text" name="name" value="">
        <br>
        <label for="abv">ABV:</label>
        <input type="text" name="abv" value="">
        <br>
        <label for="price">PRICE:</label>
        <input type="text" name="price" value="">

        <br>

        <input type="submit" value="SALVA">

    </form>
    
@endsection