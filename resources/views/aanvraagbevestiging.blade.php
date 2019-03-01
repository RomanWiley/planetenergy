@extends('layouts.app')
@section('content')
<br>

<div class="container">
    Bevestiging subsidie aanvraag
</div>
<?php
$input = Request::all();
$subsidie_category = $input['subsidie_category'];
$naam = $input['naam'];
$adres = $input['adres'];
echo $naam . "<br>" . $adres . "<br>";
?>

<BR>
<button type="submit" class="btn btn-primary" id="sendMessageButton">Terug</button>
<button type="submit" class="btn btn-primary" id="sendMessageButton">Verzend</button>

@endsection
