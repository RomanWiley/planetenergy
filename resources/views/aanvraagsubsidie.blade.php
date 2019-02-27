@extends('layouts.app')

@section('content')
<br>

<div class="container">
    <h1>Subsidie aanvraag</h1>
</div>

<form action="aanvraagbevestiging" method="get" target="_blank">
<input type="text"id="asnaam" name="naam" placeholder="Naam...">
<input type="submit" value="Submit">


</form>


@endsection
