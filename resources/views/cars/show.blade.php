@extends('layouts.app')

@section('content')

    <div class="container">
    <div style="text-align: center">
        <img 
            class="rounded mx-auto d-block img-fluid"
            src="{{ asset('images/' . $car->image_path) }}" 
            alt="{{ $car->name }}">
        <h1 class="fs-1 text-primary">
            {{ $car->name }}
        </h1>
    </div>

    <div class="d-flex flex-column align-items-center">
        <h6 class="fs-5 mx-3 fw-bold">
            Founded: {{ $car->founded }}
        </h6>

        <p class="m-1">
            {{ $car->descriotion }}
        </p>
    </div>

    <hr class="m-3" style="background-color:cornflowerblue;"  > 
    
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
</div>
@endsection