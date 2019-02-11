@extends('layouts.app')
@section('content')
<div class="container">
<form action="/threads" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{auth()->id()}}">
    <div class="form-group">
        <label for="title">Thread titel</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titel van de thread">
    </div>
    <div class="form-group">
        <label for="body">Thread text</label>
        <textarea class="form-control" name="body" id="body" cols="30" rows="10">Text van de thread</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Maak thread aan</button>
  </form>
</div>
@endsection
