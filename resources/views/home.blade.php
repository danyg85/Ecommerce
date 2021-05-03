@extends('layouts.app')

@section('content')

<header class="masthead mb-5" style="height: 80vh;
  min-height: 500px;
  background-image: url('storage/images/meat.jpg');
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  background-repeat: no-repeat;">  
</header>

<div class="container">
    <div class="row">   
                  
        @foreach ($products as $product)
        <div class="d-flex col-md-4 border text-center justify-content-center mb-5">
            
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src={{$product->image}} alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <a href={{route('productsingle',$product->id)}} class="btn btn-dark">Vedi Prodotto</a>
                </div>
            </div>            
            
        </div>  
        @endforeach              
         
    </div>
</div>

<div class="container my-5">
    <div class="row my-3">
        <div class="col-md-6">
            <img src={{asset('storage/images/meat.jpg')}} class="img-fluid">
        </div>
        <div class="col-md-6">
            <img src={{asset('storage/images/meat.jpg')}} class="img-fluid">
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-3">
            <img src={{asset('storage/images/meat.jpg')}} class="img-fluid">
        </div>
        <div class="col-md-3">
            <img src={{asset('storage/images/meat.jpg')}} class="img-fluid">
        </div>
        <div class="col-md-3">
            <img src={{asset('storage/images/meat.jpg')}} class="img-fluid">
        </div>
        <div class="col-md-3">
            <img src={{asset('storage/images/meat.jpg')}} class="img-fluid">
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-3">
            <img src={{asset('storage/images/meat.jpg')}} class="img-fluid">
        </div>
        <div class="col-md-3">
            <img src={{asset('storage/images/meat.jpg')}} class="img-fluid">
        </div>
        <div class="col-md-3">
            <img src={{asset('storage/images/meat.jpg')}} class="img-fluid">
        </div>
        <div class="col-md-3">
            <img src={{asset('storage/images/meat.jpg')}} class="img-fluid">
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <header class="masthead my-5" style="height: 80vh;
    min-height: 500px;
    background-image: url('storage/images/meat.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;">  
    </header>
</div>
@endsection
