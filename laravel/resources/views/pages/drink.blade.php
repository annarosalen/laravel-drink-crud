@extends('layouts.main-layout')

@section('content')

    <h1>DRINK SELEZIONATO:</h1>

    NOME: {{$drink -> name}}
    <br>
    ABV: {{$drink -> abv}}
    <br>
    PRICE: {{$drink -> price}}

    
@endsection