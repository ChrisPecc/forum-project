<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subsection;
use App\Models\Thread;
use App\Models\Post;

class ThreadController extends Controller
{
    //
    public function subsectionThreadList($id) {
        $threads = Thread::where('subsection_id', $id)->get();
        $subsection = Subsection::where('id', $id)->firstOrFail();
        
        return view ('threads/threadlist', ['threads'=> $threads, 'subsection' => $subsection]);
    }

    public function showSingleThread($id) {
        $posts = Post::where('thread_id', $id)-> orderBy('created_at', 'asc')-> paginate(30);
        $thread = Thread::where('id', $id)->firstOrFail();

        return view ('threads/singlethread', ['posts'=> $posts, 'thread' => $thread]);
    }

    public function createNewThread($id) {
        $subsection = Subsection::where('id', $id)->firstOrFail();
        return view ('threads/create', ['subsection' => $subsection]);
    }

    public function store(Request $request, $id) {
        $data = $request->validate([
            'thread_name' => ['required', 'unique:threads', 'max:255'],
            'post_content' => ['required', 'max:2047']
        ]);

        $user = Auth::user();

        $subsection = Subsection::where('id', $id)->firstOrFail();

        $thread = new Thread([
            'thread_name' => $data['thread_name'],
            'subsection_id' => $subsection-> id ,
            'section_id' => $subsection->section-> id
        ]);

        $thread-> user()->associate($user);
        $thread->save();

        $post = new Post([
            'post_content' => $data['post_content'],
            'section_id' => $subsection->section-> id,
            "is_first_of_thread" => true
        ]);

        $post->user()->associate($user);
        $post->thread()->associate($thread);
        $post->save();

        return \Redirect::route('single.thread.show', [$thread->id]);
    }
}
