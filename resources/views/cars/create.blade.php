@extends('layouts.app')


@section('content')
    <div class="conteiner">
    <div class="m-3">
        <div style="text-align: center">
            <h1 class="fs-1 text-primary">
                Create car
            </h1>
        </div>
        

    </div>
    
    <div class="d-flex flex-column align-items-center p-3">
        <form action="/cars" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="d-block">
                <input 
                type="file" 
                class="d-block shadow mb-3 p-1 "
                style="width: 300px;" 
                name="image">
                <input 
                type="text" 
                class="d-block shadow mb-3 p-1 "
                style="width: 300px;"
                placeholder="Brand name" 
                name="name">
                <input 
                type="text" 
                class="d-block shadow mb-3 p-1 "
                style="width: 300px;"
                placeholder="Year founded..." 
                name="founded">
                <input 
                type="text" 
                class="d-block shadow mb-3 p-1 "
                style="width: 300px;"
                placeholder="description..." 
                name="description">

                <button type="submit" class="btn btn-primary" >
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

    </div>

@endsection