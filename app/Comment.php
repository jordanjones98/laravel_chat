<?php

namespace App;

class Comment extends Model
{
    // Find the post that a comment belongs too.
    public function post() {
        return $this->belongsTo(Post::class);
    }

    public function user() { // $comment->user to find comments that a user posted
        return $this->belongsTo(User::class);
    }
}
