@extends('layouts.app')

@section('content')

	<h1 class="title">Edit a Product</h1>

    <form method="post" action="/product/{{ $product->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')



		<div class="field">
			<label class="label" for="product_name">Productnaam</label>
			<div class="control">
                <input type="text" class="input" name="product_name" value="{{ $product->product_name }}" reqiured>
			</div>
    	</div>

        <div class="field">
            <label class="label" for="product_category">Categorie</label>
            <div class="control">
                <input type="text" class="input" name="product_category" value="{{ $product->product_category }}">
            </div>
        </div>


	<div class="field">
		<label class="label" for="price">Prijs</label>
		<div class="control">
			<input type="text" class="input" name="price" value="{{ $product->price }}">
		</div>
	</div>

	<div class="field">
		<label class="label" for="product_image">Afbeelding</label>
		<div class="control">
			<input type="file" class="input" name="product_image" value="{{ $product->product_image }}">
		</div>
    </div>

    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

    <div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Edit this product</button>
		</div>
	</div>

    {{-- als een error verschijnt, dan pas de error-balk tonen --}}
    @include('error')

</form>

@endsection
