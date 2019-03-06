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

        <div class="form-row mb-4">
            <div class="col">

                <!-- Voornaam -->
                <input type="text"id="asnaam" class="form-control" name="firstname" placeholder="Voornaam">
            </div>
            <div class="col">
                <!-- Achternaam -->
                <input type="text"id="asnaam" class="form-control" name="name" placeholder="Achternaam">
            </div>
        </div>

        <!-- Adres -->
        <input type="text"id="asadres" class="form-control mb-4" name="adres" placeholder="Adres">

        <!-- Postcode -->
        <input type="text"id="aspostcode" class="form-control mb-4" name="postcode" placeholder="Postcode">

        <!-- Woonplaats -->
        <input type="text"id="aswoonplaats" class="form-control mb-4" name="woonplaats" placeholder="Woonplaats">

        <!-- Telefoonnummer -->
        <input type="text"id="astelefoonnummer" class="form-control mb-4" name="telefoonnummer" placeholder="Telefoonnummer">

        <!-- E-mail -->
        <input type="text"id="asemail" class="form-control mb-4" name="email" placeholder="E-mail">

        <textarea rows="4" cols="50" name="comment" placeholder="Opmerkingen...">
            </textarea>
            <BR>

        <a href="/" class="btn btn-danger" >Annuleer</a>
        <button type="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>

        <hr>


    </form>

@endsection
