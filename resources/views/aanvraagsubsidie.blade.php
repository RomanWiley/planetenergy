@extends('layouts.app')

@section('content')
<br>

<div class="container">
    <h1>Subsidie aanvraag</h1>
</div>

<form action="aanvraagbevestiging" method="get" target="_blank">
<label class="label" for="product_category">Maak een keuze</label>
    <select id="select_category" name="product_category" onchange="filteroncategory()">
        <option value="Zon">Zon</option>
        <option value="Wind">Wind</option>
        <option value="WBSO">Wet Bevordering Speur- en Ontwikkelingswerk</option>
    </select>
    <BR>
<input type="text"id="asnaam" name="naam" placeholder="Naam...">
<BR>
<input type="text"id="asadres" name="adres" placeholder="Adres...">
<BR>
<input type="text"id="aswoonplaats" name="woonplaats" placeholder="Woonplaats...">
<BR>
<input type="text"id="aspostcode" name="postcode" placeholder="Postcode...">
<BR>
<input type="text"id="astelefoon" name="telefoonnummer" placeholder="Telefoon...">
<BR>
<input type="text"id="asnaam" name="email" placeholder="Email...">
<BR>
<textarea rows="4" cols="50" name="comment" form="usrform" placeholder="Opmerkingen...">
</textarea> 
<BR>
<button type="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>

</form>

@endsection
