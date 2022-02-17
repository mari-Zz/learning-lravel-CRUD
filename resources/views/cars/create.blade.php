@extends('layouts.app')


@section('content')

    <div style="margin: 0 10px;">
        <div style="text-align: center">
            <h1 style="font-size: 3rem">
                create car
            </h1>
        </div>
        

    </div>
    
    <div style="display: flex; justify-content: center; padding: 20px; flex-diraction: column;">
        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            <div style="display: block">
                <input 
                type="file" 
                style="display: block; box-shadow: 5 5 30 grey; margin-bottom: 30px; padding: 5px; width: 300px;" 
                name="image">
                <input 
                type="text" 
                style="display: block; box-shadow: 5 5 30 grey; margin-bottom: 30px; padding: 5px; width: 300px;" 
                placeholder="Brand name" 
                name="name">
                <input 
                type="text" 
                style="display: block; box-shadow: 5 5 30 grey; margin-bottom: 30px; padding: 5px; width: 300px;"
                placeholder="Year founded..." 
                name="founded">
                <input 
                type="text" 
                style="display: block; box-shadow: 5 5 30 grey; margin-bottom: 30px; padding: 5px; width: 300px;"
                placeholder="description..." 
                name="description">

                <button type="submit" style="background-color: cornflowerblue; display: block;box-shadow: 5 5 30 grey; padding: 5px; width: 300px; font-weight:bold;">
                    Submit
                </button>
            </div>
        </form>

        
    </div>

    @if ($errors->any())
    <div style="display: flex; justify-content: center; padding: 20px;">
        @foreach ($errors->all() as $error)
            <li style="list-style-type: none; color: red;">
                {{ $error }}
            </li>
        @endforeach
    </div>
    @endif

@endsection