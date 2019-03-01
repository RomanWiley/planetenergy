@extends('layouts.app')

@section('content')
<br>

<div class="container">
    <h1>Subsidie aanvraag</h1>
</div>

<form action="aanvraagbevestiging" method="post" target="_">
@csrf
<label class="label" for="subsidie_category">Maak een keuze</label>
    <select id="select_category" name="subsidie_category">
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
<textarea rows="4" cols="50" name="comment" placeholder="Opmerkingen...">
</textarea> 
<BR>
<a href="/" class="btn btn-danger" >Annuleer</a>    
<button type="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>

</form>

<!-- Card -->
<div class="card mx-xl-5">

    <!-- Card body -->
    <div class="card-body">

        <!-- Default form subscription -->
        <form>
            <p class="h4 text-center py-4">Subscribe</p>

            <!-- Default input name -->
            <label for="defaultFormCardNameEx" class="grey-text font-weight-light">Your name</label>
            <input type="text" id="defaultFormCardNameEx" class="form-control">

            <br>

            <!-- Default input email -->
            <label for="defaultFormCardEmailEx" class="grey-text font-weight-light">Your email</label>
            <input type="email" id="defaultFormCardEmailEx" class="form-control">

            <div class="text-center py-4 mt-3">
                <button class="btn btn-outline-purple" type="submit">Send<i class="fa fa-paper-plane-o ml-2"></i></button>
            </div>
        </form>
        <!-- Default form subscription -->

    </div>
    <!-- Card body -->

</div>
<!-- Card -->


@endsection
