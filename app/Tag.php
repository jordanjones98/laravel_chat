<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Tags;

class Tag extends Model
{
    public function posts() {
        // Many to many relationship
        return $this->belongsToMany(Post::Class);
    }
}
