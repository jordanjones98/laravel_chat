<?php

namespace App;
use App\Comment;
use App\Tag;

use Carbon\Carbon; // use Carbon

class Post extends Model
{
    // Find the comments that belong to a post
    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function user() { // $comment->user to find comments that a user posted
        return $this->belongsTo(User::class);
    }

    public function addComment($body) {
        $this->comments()->create([
            'body' => $body,
        ]);
    }

    public function scopeFilter($query, $filters) {
        $posts = Post::latest();

        if ($month = $filters['month']) {
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if ($year = $filters['year']) {
            $query->whereYear('created_at', $year);
        }
    }

    public static function archives() {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->orderByRaw('min(created_at) desc')
            ->get()
            ->toArray();
    }

    public function tags() {
        // Many to many relationship
        return $this->belongsToMany(Tag::Class);
    }
}
