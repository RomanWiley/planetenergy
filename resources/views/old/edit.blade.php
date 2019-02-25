{{-- @extends('layouts.app') --}}
{{-- @section('content') --}}
<div class="container">
<form action="/threads/{{$thread->id}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="hidden" name="user_id" value="{{auth()->id()}}">
    <div class="form-group">
        <label for="title">Thread titel</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Titel van de thread" value="{{$thread->title}}">
    </div>
    <div class="form-group">
        <label for="body">Thread text</label>
        <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{$thread->body}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Sla wijzigingen op</button>
  </form>
</div>
{{-- @endsection --}}
