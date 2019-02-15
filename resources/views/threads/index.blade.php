@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                @include('forumheader')
                <div class="panel-heading"><h1>Forum Threads</h1></div>
                 <div class="panel-body">
                    @foreach($threads as $thread)
                    @if ($thread->category == 'members')
                    <article>
                        <h4>{{ $thread->title }}</h4>
                        <div class='body'>
                            {!! nl2br($thread->body) !!}
                        </div>
                        <div class="footer">

                            <a href='<?php echo $url = url()->current()?>/{{$thread->id}}'>Ga naar dit topic</a>
                            <span class="float-right time-footer">Updated at {{$thread->updated_at}}</span>
                        </div>
                    </article>
                    <hr>
                    @endif
                    @endforeach
                </div>
                {{$threads->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
