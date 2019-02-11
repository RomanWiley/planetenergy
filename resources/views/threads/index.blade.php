@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>
                 <div class="panel-body">
                    @foreach($threads as $thread)
                        <article>
                            <h4>{{ $thread->title }}</h4>
                            <div class='body'>
                                {{ $thread->body }}
                            </div>
                            <div class="footer">
                                <a href='/threads/{{$thread->id}}'>Ga naar dit onderwerp</a>
                            </div>
                        </article>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection