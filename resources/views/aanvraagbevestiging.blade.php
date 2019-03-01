@extends('layouts.app')
@section('content')
<br>

<div class="container" style="text-align: center; ">
    <h2>Bevestiging subsidie aanvraag</h2><BR>
</div>
<?php
$input = Request::all();
$subsidie_category = $input['subsidie_category'];
$naam = $input['naam'];
$adres = $input['adres'];
$woonplaats = $input['woonplaats'];
$postcode = $input['postcode'];
$telefoon = $input['telefoonnummer'];
$email = $input['email'];
$comment = $input['comment'];
?>
<div style="border-style: solid; border-radius: 25px; background-color: lightgray; padding: 25px;" >
<b>Subsidie Categorie: </b>
{{$subsidie_category}}
<BR>
<b>Naam: </b>
{{$naam}}
 <br>
 <b>Adres: </b> 
 {{$adres}} 
 <br> 
 <b>Woonplaats: </b>
 {{$woonplaats}}
 <br>
 <b>Postcode: </b>
 {{$postcode}}
 <BR>
 <b>Telefoon: </b>
 {{$telefoon}}
 <BR>
 <b>Email: </b>
 {{$email}}
 <BR>
 <b>Opmerkingen: </b>
 {{$comment}}
<BR>

</div>
<BR>
<a href="/aanvraagsubsidie" class="btn btn-danger" >Terug</a>    
<button type="submit" class="btn btn-primary" id="sendMessageButton">Verzend</button>

@endsection
