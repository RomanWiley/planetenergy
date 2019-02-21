@extends('layouts.app')

@section('content')
@include('webshopheader')

<?php
$link = $product->getFirstMediaUrl('product_images');
$old = "localhost";
$new = "pe.test";
$newlink = str_replace($old, $new, $link);
?>

<h1>Product: {{ $product->product_name }}</h1><br>
<h3>Categorie: {{ $product->product_category }}</h3>
<h3>Prijs: {{ $product->price }}</h3>
<h3>Image: <img src="<?=$newlink?>" alt="Could not load image"></h3>

<button class="btn btn-info"><a class="text-dark font-weight-bold" href="/product/{{$product->id}}/edit">Edit</a></button>

@can('update', $product)
    <form action="/product/{{$product->id}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete this product</button>
    </form>
@endcan

@endsection

