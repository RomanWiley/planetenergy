@extends('layouts.app')

@section('content')

<h1 class="title">Toevoegen nieuw product</h1>

    <form method="post" action="/product" enctype="multipart/form-data">
    @csrf


<div class="field">
			<label class="label" for="product_name">Productnaam</label>
			<div class="control">
                <input type="text" class="input form-control" name="product_name" value="" required>
			</div>
    	</div>

        <div class="field">
            <label class="label" for="product_category">Categorie</label>
            <div class="control">
                <input type="text" class="input form-control" name="product_category" value="">
            </div>
        </div>

	<div class="field">
		<label class="label" for="price">Prijs</label>
		<div class="control">
			<input type="text" class="input form-control" name="price" value="">
		</div>
	</div>

	<div class="field">
		<label class="label" for="product_image">Afbeelding</label>

		<div class="control">
			<input type="file" class="input form-control" name="product_image" value="">
	</div>
    </div>

    <input type="hidden" name="user_id" value="{{ auth()->id() }}">


    <div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Voeg product toe</button>
		</div>
	</div>

    @include('error')
@endsection
