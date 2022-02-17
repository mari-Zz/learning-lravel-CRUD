@extends('layouts.app')


@section('content')

    <div style="margin: 0 10px;">
        <div style="text-align: center">
            <h1 style="font-size: 3rem">
                update car
            </h1>
        </div>
        
    </div>
    
    <div style="display: flex; justify-content: center; padding: 20px">
        <form action="/cars/{{ $car->id }}" method="POST">
            @csrf
            @method('PUT')
            <div style="display: block">
                <input 
                type="text" 
                style="display: block; box-shadow: 5 5 30 grey; margin-bottom: 30px; padding: 5px; width: 300px;" 
                value={{ $car->name }}
                name="name">
                <input 
                type="text" 
                style="display: block; box-shadow: 5 5 30 grey; margin-bottom: 30px; padding: 5px; width: 300px;"
                value={{ $car->founded }}
                name="founded">
                <input 
                type="text" 
                style="display: block; box-shadow: 5 5 30 grey; margin-bottom: 30px; padding: 5px; width: 300px;"
                value={{ $car->descriotion }} 
                name="description">

                <button type="submit" style="background-color: cornflowerblue; display: block;box-shadow: 5 5 30 grey; padding: 5px; width: 300px; font-weight:bold;">
                    Submit
                </button>
            </div>
        </form>
    </div>


@endsection