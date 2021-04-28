@extends('layouts.app')

@section('content')

    <div class="container my-5">

        <div class="row my-3">
            <div class="d-flex col-md-12 justify-content-around">
                <img src={{$product->image}}>
            </div>
        </div>

        <div class="row my-3">
            <div class="d-flex col-md-12 justify-content-around">
                <h3>{{$product->title}}</h3>
            </div>            
        </div>

        <div class="row my-3">
            <div class="d-flex col-md-12 justify-content-around">
                <h4>{{$product->description}}</h4> 
            </div>            
        </div>

        <div class="row my-3">
            <div class="d-flex col-md-12 justify-content-around">
                <h4>{{$product->price}}</h4> 
            </div>            
        </div>

    </div>
    
@endsection
