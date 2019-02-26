@extends('layouts.app')

@section('content')
<?php
$category = Illuminate\Support\Facades\Input::get('product_category');
?>

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
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                @include('productheader')
                <br>
                <br>
                 <div id="filterme" class="panel-body">
                    @foreach($products as $product)
                    @if ($product->product_category == $category)
                    <?php

                    $link = $product->getFirstMediaUrl('product_images');
                    $old = "localhost";
                    $new = "pe.test";
                    $newlink = str_replace($old, $new, $link);
                    ?>
                        <div class="filterdiv">
                        <a href='/product/{{$product->id}}' style="text-decoration:none;color:black">
                            <article class="productdiv">
                                <H4 class="productname"><b>{{ $product->product_name }}</b></H4>
                                <img src="<?= $newlink?>" alt="No image found">
                                <div class='body'>
                                    Categorie: {{ $product->product_category }}<BR> &#8364
                                    <span class="productprice"> {{ $product->price }} </span>
                            </div>
                        </a>

                            <hr>
                            </article>
                        </div>
                    @endif
                    @endforeach

                </div>
                {{-- {{$product->links()}} --}}
            </div>
        </div>
    </div>
</div>
@endsection
