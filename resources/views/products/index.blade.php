@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                @include('productheader')
                <div class="panel-heading"><h1>Mijn Producten</h1></div>
                 <div class="panel-body">
                    <div id="filterme" class="panel-body flex-container d-flex flex-wrap useflex">
                        @foreach($products as $product)
                            @if ($product->user_id == Auth()->id())
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
                            @endif
                        @endforeach
                    </div>
                </div>
                {{-- {{$product->links()}} --}}
            </div>
        </div>
    </div>
</div>
@endsection
