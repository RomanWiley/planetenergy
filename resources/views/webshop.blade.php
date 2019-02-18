@extends('layouts.app')

@section('content')
<?php

$products=App\Product::all()
?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                {{-- @include('productheader') --}}
                <div class="panel-heading"><h1>Webshop</h1><br></div>
                 <div class="panel-body">
                    @foreach($products as $product)

                        <article>
                            <h4>{{ $product->product_name }}</h4>
                            <div class='body'>
                                {{ $product->product_category }}<BR>
                                Euro: {{ $product->price }}
                            </div>
                            <div class="footer">
                                <a href='/products/{{$product->id}}'>Ga naar dit product</a>
                                <span class="float-right time-footer">Updated at {{$product->updated_at}}</span>
                            </div>
                        </article>
                        <hr>
                    @endforeach
                </div>
                {{-- {{$product->links()}} --}}
            </div>
        </div>
    </div>
</div>
@endsection
