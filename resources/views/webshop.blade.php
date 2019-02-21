@extends('layouts.app')

@section('content')

<script>
$(document).ready(function(){

    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $(".productdiv").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  })
</script>


<?php

$products=App\Product::all()
?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                @include('productheader')
                 {{-- input for filter --}}
                <label for="myInput">Zoek filter: </label>
                <input type="text" id="myInput" name="myInput" placeholder="Filter..">
                <br>
                <br>
                 <div id="filterme" class="panel-body">
                    @foreach($products as $product)

                        <article class="productdiv">
                            <h4 class="productname">{{ $product->product_name }}</h4>
                            <div class='body'>
                                {{ $product->product_category }}<BR>
                                <span class="productprice"> Euro: {{ $product->price }} </span>
                            </div>
                            <div class="footer">
                                <a href='/product/{{$product->id}}'>Ga naar dit product</a>
                                <span class="float-right time-footer">Updated at {{$product->updated_at}}</span>
                            </div>
                            <button class="btn btn-info"><a class="text-dark font-weight-bold" href="/product/{{$product->id}}/edit">Edit</a></button>

                            <hr>
                        </article>
                    @endforeach

                </div>
                {{-- {{$product->links()}} --}}
            </div>
        </div>
    </div>
</div>
@endsection
