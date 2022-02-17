@extends('layouts.app')


@section('content')

    <div>
        <div style="text-align: center">
            <h1 style="font-size: 3rem">
                Cars
            </h1>
        </div>
        {{ dd(Auth::user()) }}
        <div style="padding: 10px">
            <a href="cars/create" style="border-bottom: 2px dotted grey; color: grey; margin:0 10px ">
                add a new car &rarr;
            </a>
        </div>
    
        <div>
            @foreach ($cars as $car)
            <div class="m-auto">
                <div style="float: right;">
                    <a href="cars/{{ $car->id }}/edit" style="border-bottom: 2px dotted grey; color: green; margin:0 10px ">
                        Edit &rarr;
                    </a>

                    <form action="/cars/{{ $car->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="delete" style="border-bottom: 2px dotted grey; color: red; margin:0 10px ">delete &rarr;</button>
                    </form>
                </div>
                <span style="font-size: 1rem; margin:0 20px;font-weight:bold">
                    Founded: {{ $car->founded }}
                </span>

                <h2 style="font-size: 1.5rem; margin: 10px 20px;color:cornflowerblue;font-weight:bold">
                    <a href="/cars/{{ $car->id }}">
                        {{ $car->name }}
                    </a>
                </h2>

                <p style="margin: 0 20;">
                    {{ $car->descriotion }}
                </p>

                <hr style="background-color:cornflowerblue;  margin: 10 25px; height:2px;" > 
            </div>
                
            @endforeach
        </div>
    </div>
@endsection