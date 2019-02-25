@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>{{ $thread->title }}</h2>
                </div>
                <div class="panel-body">
                    {!! nl2br($thread->body) !!}
                    <br>
                    <span class="float-right time-footer">Gewijzigd op: {{ $thread->updated_at }} </span>
                </div>
                <div class="panel-footer">
                    @if(Auth::id() == $thread->user_id)
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                            Edit this topic
                        </button>
                        <!-- Modal -->
                        <div class="modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Wijzig topic</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                @include('threads.edit')
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                        {{-- <a href="{{ action('ThreadController@edit', [$thread->id]) }}">Edit</a> --}}
                        {{-- @include('threads.edit') --}}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-2">

        @foreach($thread->replies as $reply)
            @include('threads.reply')
        @endforeach

        </div>
    </div>
    <div class='row'>
        <div class="col-md-8 col-md-offset-2">
        @if(auth()->check())
            <form method='POST' action='{{ $thread->path() . "/replies" }}'>
                {{ csrf_field() }}

                <div class='form-group'>
                    <textarea name='body' id='body' class='form-control' placeholder='Write your reply here' rows='5'></textarea>
                </div>

                <button type='submit' class='btn btn-default'>Post</button>
            </form>
        @else
            <p>Please <a href='{{ route("login") }}'>sign in</a> to post a reply to this thread.
        @endif
        </div>
    </div>
</div>
@endsection
