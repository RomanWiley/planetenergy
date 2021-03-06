<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;
use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $threads = DB::table('threads')->latest()->get()->paginate(10);
        // $threads = Thread::latest()->paginate(8);
        return view('threads.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('threads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'user_id' => ['required'],
            'title' => ['required', 'min:3', 'max:255'],
            'body' => ['required', 'min:10'],
            'category' => ['required']
        ]);
        Thread::create($attributes);
        return redirect('/forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Thread $thread)
    {
        return view('threads.show', compact('thread'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        if(\Auth::id() !== $thread->user_id) {
            return back();
        } else {
            return view('threads.edit', compact('thread'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thread $thread)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $thread->update(request(['title', 'body']));
        return redirect("/threads/$thread->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
