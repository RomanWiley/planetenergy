@extends('layouts.app')
@section('content')
<br>

<div class="container" style="text-align: center; ">
    <h2>Bevestiging subsidie aanvraag</h2><br>
</div>
<?php
$input = Request::all();
?>
<div style="border-style: solid; border-radius: 25px; background-color: lightgray; padding: 25px;" >
<h4><b>Subsidie Categorie: </b>
    {{$input['subsidie_category']}}</h4>
<b>Naam: </b>
    {{$input['name']}}
<br>

<b>Adres: </b>
    {{$input['adres']}}
<br>

<b>Woonplaats: </b>
    {{$input['woonplaats']}}
<br>

<b>Postcode: </b>
    {{$input['postcode']}}
<br>

<b>Telefoon: </b>
    {{$input['telefoonnummer']}}
<br>

<b>Email: </b>
    {{$input['email']}}
<br>

<b>Opmerkingen: </b>
    {{$input['comment']}}
<br>

</div>
<br>
<a href="/aanvraagsubsidie" class="btn btn-danger" >Terug</a>
<a href="/" class="btn btn-success" >Verzend</a>


@endsection
