@extends('layouts.app')

@section('content')

    <div style="text-align: center">
        <img 
            src="{{ asset('images/' . $car->image_path) }}" 
            alt="{{ $car->name }}">
        <h1 style="font-size: 3rem">
            {{ $car->name }}
        </h1>
    </div>

    <div style="text-align: center">
        <span style="font-size: 1rem; margin:0 20px;font-weight:bold">
            Founded: {{ $car->founded }}
        </span>

        <p style="margin: 0 20;">
            {{ $car->descriotion }}
        </p>

        <hr style="background-color:cornflowerblue;  margin: 10 25px; height:2px;" > 
    </div>

   <table style="margin: 10px auto">
       <tr style="background-color: cornflowerblue">
            <th style="width: 33%; border: 4px solid grey">
                Model
            </th>
            <th style="width: 33%; border: 4px solid grey">
                Engines
            </th>
            <th style="width: 33%; border: 4px solid grey">
                Date
            </th>
       </tr>

       @forelse ($car->carModels as $model)
            <tr>
                <td style="border: 2px solid grey">
                    {{ $model->model_name }}
                </td>

                <td style="border: 2px solid grey">
                    @foreach ($car->engines as $engine)
                        @if ($model->id == $engine->model_id)
                            {{ $engine->engine_name }}
                        @endif
                        
                    @endforeach
                

                </td>
                </td style="border: 2px solid grey">
                    {{-- {{ date('d-m-Y', strtotime($car->productionDate->created_at)) }} --}}
                <td>

            </tr>
           
       @empty
            <p>no car model found</p>
           
       @endforelse
   </table>


   <P>
       Producte Types:
       @forelse ($car->products as $product)
           {{ $product->name }}
       @empty
           <p>nothing found!</p>
       @endforelse
   </P>
    
@endsection