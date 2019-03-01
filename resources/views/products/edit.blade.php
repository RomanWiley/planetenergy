@extends('layouts.app')

@section('content')

	<h1 class="title">Edit a Product</h1>

    <form method="post" action="/product/{{ $product->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')



		<div class="field">
			<label class="label" for="product_name">Productnaam</label>
			<div class="control">
                <input type="text" class="input form-control" name="product_name" value="{{ $product->product_name }}" reqiured>
			</div>
    	</div>

        <div class="field">
            <label class="label" for="product_category">Categorie</label>
            <div class="control">
                <select class="custom-select" name="product_category">
                  <option value="Opwekken">Opwekken</option>
                  <option value="Opslag">Opslag</option>
                  <option value="Isolatie">Isolatie</option>
                  <option value="Besparen">Besparen</option>
                  <option value="Overig">Overig</option>
                </select>
            </div>
        </div>


	<div class="field">
		<label class="label" for="price">Prijs</label>
		<div class="control">
			<input type="text" class="input form-control" name="price" value="{{ $product->price }}">
		</div>
	</div>

	<div class="field">
        <label class="btn btn-default btn-sm center-block btn-file">
        <i class="fa fa-upload fa-2x" aria-hidden="true"></i>
        <input name="product_image" type="file" style="display: none;">Afbeelding toevoegen
        </label>
    </div>

    <input type="hidden" name="user_id" value="{{ auth()->id() }}">

    <div class="field">
		<div class="control">
			<button type="submit" class="btn btn-info">Edit this product</button>
		</div>
	</div>

    {{-- als een error verschijnt, dan pas de error-balk tonen --}}
    @include('error')

</form>

@endsection
