<?php

namespace App\Http\Controllers;

use App\Models\Post;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        $validate = request()->validate([
           'comment' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'comment' => request('comment')
        ]);

        return back();
    }
}
