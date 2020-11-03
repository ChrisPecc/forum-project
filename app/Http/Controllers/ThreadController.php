<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
