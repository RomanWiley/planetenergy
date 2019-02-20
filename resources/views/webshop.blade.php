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
{{ $products }}
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                @include('productheader')
                <input type="text" id="myInput" name="myInput">
                 <div id="filterme" class="panel-body">
                    @foreach($products as $product)

                        <article class="productdiv">
                            <h4>{{ $product->product_name }}</h4>
                            <div class='body'>
                                {{ $product->product_category }}<BR>
                                Euro: {{ $product->price }}
                            </div>
                            <div class="footer">
                                <a href='/product/{{$product->id}}'>Ga naar dit product</a>
                                <span class="float-right time-footer">Updated at {{$product->updated_at}}</span>
                            </div>
                            <button class="btn btn-info"><a class="text-dark font-weight-bold" href="/product/{{$product->id}}/edit">Edit</a></button>

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
