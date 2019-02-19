@extends('layouts.app')

@section('content')
@include('webshopheader')
<h1>Product: {{ $product->product_name }}</h1><br>
<h3>Prijs: {{ $product->product_category }}</h3>
<h3>Prijs: {{ $product->price }}</h3>
<h3>Image: {{ $product->product_image }}</h3>

<button class="btn btn-info"><a class="text-dark font-weight-bold" href="/product/{{$product->id}}/edit">Edit</a></button>
<button class="btn btn-info"><a class="text-dark font-weight-bold" href="/product/{{$product->id}}/delete">Delete</a></button>

@endsection
