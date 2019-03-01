@extends('layouts.app')
@section('content')
<br>

<div class="container" style="text-align: center; ">
    <h2>Bevestiging subsidie aanvraag</h2><BR>
</div>
<?php
$input = Request::all();
?>
<div style="border-style: solid; border-radius: 25px; background-color: lightgray; padding: 25px;" >
<b>Subsidie Categorie: </b>
{{$input['subsidie_category']}}
<BR>
<b>Naam: </b>
{{$input['naam']}}
 <br>
 <b>Adres: </b>
 {{$input['adres']}}
 <br>
 <b>Woonplaats: </b>
 {{$input['woonplaats']}}
 <br>
 <b>Postcode: </b>
 {{$input['postcode']}}
 <BR>
 <b>Telefoon: </b>
 {{$input['telefoonnummer']}}
 <BR>
 <b>Email: </b>
 {{$input['email']}}
 <BR>
 <b>Opmerkingen: </b>
 {{$input['comment']}}
<BR>

</div>
<BR>
<a href="/aanvraagsubsidie" class="btn btn-danger" >Terug</a>
<button type="submit" class="btn btn-primary" id="sendMessageButton">Verzend</button>

@endsection
