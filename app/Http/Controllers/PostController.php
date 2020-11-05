<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Thread;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function create($id){
        $thread = Thread::where('id', $id)->firstOrFail();

        return view('posts/create', ['thread' => $thread]);
    }

    public function store(Request $request, $id) {
        $data = $request->validate([
            'post_content' => ['required', 'max:2047']
        ]);

        $user = Auth::user();

        $thread = Thread::where('id', $id)->firstOrFail();

        $post = new Post([
            'post_content' => $data['post_content'],
            'section_id' => $thread -> section -> id
        ]);

        $post->user()->associate($user);
        $post->thread()->associate($thread);
        $post->save();

        return \Redirect::route('single.thread.show', [$thread->id]);
    }
}
