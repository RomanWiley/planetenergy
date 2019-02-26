@extends('layouts.app')

@section('content')

<script>
$(document).ready(function(){

    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $(".productname").filter(function() {
        $(this).parentsUntil(".filterdiv").toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  })
</script>


<?php
$products=App\Product::all()
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                @include('productheader')
                <br>
                <br>
                 <div id="filterme" class="panel-body flex-container d-flex flex-wrap useflex">
                    @foreach($products as $product)
                    <?php

                    $link = $product->getFirstMediaUrl('product_images');
                    $old = "localhost";
                    $new = "pe.test";
                    $newlink = str_replace($old, $new, $link);
                    ?>
                        <div class="filterdiv card col-md-3 m-2">
                        <a href='/product/{{$product->id}}' style="text-decoration:none;color:black">
                            <article class="productdiv card-body">
                                <H4 class="productname card-title"><b>{{ $product->product_name }}</b></H4>
                                <img src="<?= $newlink?>" alt="No image found">
                                <div class='body card-text'>
                                    Categorie: {{ $product->product_category }}<BR> &#8364
                                    <span class="productprice"> {{ $product->price }} </span>
                            </div>
                        </a>
                            </article>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
