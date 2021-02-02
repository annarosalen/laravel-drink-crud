@extends('layouts.main-layout')

@section('content')
    
    <h1>DRINKS LIST:</h1>

    <a href="{{route('drink-create')}}"><h2>CREA NUOVO DRINK</h2></a>

    <ul>

        @foreach ($drinks as $drink)
            <a href="{{route ('drink-show', $drink -> id)}}">

                <li>
                    NAME: {{$drink -> name}}
                    <br>
                    ABV: {{$drink -> abv}}
                    <br>
                    PRICE: {{$drink -> price}}
                    <br>
                    <a href="{{route('drink-edit', $drink-> id)}}">EDIT</a>
                    <br>
                    <a href="{{route('drink-delete', $drink-> id)}}">DELITE</a>
                </li>

            </a>
            

        @endforeach

    </ul>

@endsection