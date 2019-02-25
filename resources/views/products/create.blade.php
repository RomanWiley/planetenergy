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
			<input type="text" class="input form-control" name="price" value="">
		</div>
	</div>

	<div class="field">
    <label class="btn btn-default btn-sm center-block btn-file">
 <i class="fa fa-upload fa-2x" aria-hidden="true"></i>
 <input type="file" style="display: none;">Afbeelding toevoegen
</label>
    </div>



    <input type="hidden" name="user_id" value="{{ auth()->id() }}">


    <div class="field">
		<div class="control">
			<button class="btn btn-info" type="submit" class="button is-link">Voeg product toe</button>
        </div>
	</div>

    @include('error')
@endsection
