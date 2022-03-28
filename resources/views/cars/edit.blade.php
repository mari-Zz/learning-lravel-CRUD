@extends('layouts.app')


@section('content')

    <div class="conteiner">
        <div class="m-3">
        <div style="text-align: center">
            <h1 class="fs-1 text-primary">
                Update car
            </h1>
        </div>


        
    </div>
    
    <div class="d-flex flex-column align-items-center p-3">
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div style="display: block">
                <input 
                type="text" 
                class="d-block shadow mb-3 p-1 "
                style="width: 300px;"
                value={{ $car->name }}
                name="name">
                <input 
                type="text" 
                class="d-block shadow mb-3 p-1 "
                style="width: 300px;"
                value={{ $car->founded }}
                name="founded">
                <input 
                type="text" 
                class="d-block shadow mb-3 p-1 "
                style="width: 300px;"
                value={{ $car->descriotion }} 
                name="description">

                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
            </div>
        </form>
    </div>
    </div>


@endsection