@extends('layout')

@section('content')

	<h1 class="title">Edit a Product</h1>

    <form method="post" action="/products/{{ $product->id }}">
        @csrf
        @method('PATCH')



		<div class="field">
			<label class="label" for="productname">Product name</label>
			<div class="control">
                <input type="text" class="input" name="productname" value="{{ $product->product_name }}" reqiured>
			</div>
    	</div>

        <div class="field">
            <label class="label" for="category">Categorie</label>
            <div class="control">
                <input type="text" class="input" name="category" value="{{ $product->product_category }}">
            </div>
        </div>


	<div class="field">
		<label class="label" for="price">Prijs</label>
		<div class="control">
			<input type="text" class="input" name="price" value="{{ $product->price }}">
		</div>
	</div>

	<div class="field">
		<label class="label" for="image">Afbeelding</label>
		<div class="control">
			<input type="text" class="input" name="image" value="{{ $product->product_image }}">
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
