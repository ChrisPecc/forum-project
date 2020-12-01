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

    public function edit($post_id){
        $post = Post::find($post_id);

        return view('posts/edit', ['post' => $post]);
    }

    public function postUpdate(Request $request, $post_id) {
        $data = $request->validate([
            'post_content' => ['required', 'max:2047']
        ]);

        $post = Post::find($post_id);

        $post-> update(['post_content' => $data['post_content']]);

        return \Redirect::route('single.thread.show', [$post-> thread->id]);
    }

    public function postDelete($post_id){
        $post = Post::find($post_id);
        error_log($post-> is_first_of_thread);

        if ($post-> is_first_of_thread === 1) {
            error_log("c'est le premier post");
            return \Redirect::route('single.thread.show', [$post-> thread->id]);
        }
        else {
            $post-> delete();
            error_log("ce n'est pas le premier post");
            
            return \Redirect::route('single.thread.show', [$post-> thread->id]);

        }

    }
}
