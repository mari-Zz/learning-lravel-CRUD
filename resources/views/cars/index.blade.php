@extends('layouts.app')


@section('content')

    <div class="container d-flex flex-column">
        <div class="align-self-center">
            <h1 class="fs-1">
                Cars
            </h1>
        </div>
        <div class="p-3">
            <a href="cars/create" type="button" class="btn btn-secondary">
                add a new car &rarr;
            </a>
        </div>
    
        <div>
            @foreach ($cars as $car)
            <div class="m-auto">
                <div style="float: right;">
                    <a href="cars/{{ $car->id }}/edit" type="button" class="btn btn-success">
                        Edit &rarr;
                    </a>

                    <form action="/cars/{{ $car->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="delete" type="button" class="btn btn-danger">delete &rarr;</button>
                    </form>
                </div>
                <h6 class="fs-5 mx-3 fw-bold">
                    Founded: {{ $car->founded }}
                </h6>

                <h2 class="text-primary fs-2 m-3 fw-bold" >
                    <a href="/cars/{{ $car->id }}">
                        {{ $car->name }}
                    </a>
                </h2>

                <p class="m-3">
                    {{ $car->descriotion }}
                </p>

                <hr class="m-3" style="background-color:cornflowerblue;" > 
            </div>
                
            @endforeach
        </div>
    </div>
@endsection