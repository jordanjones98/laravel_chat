<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 8/31/17
 * Time: 10:42 PM
 */

namespace App\Repositories;

use App\Post;

class Posts {
    public function all() {
        // Return All Posts
        Return Post::all();
    }


}

?>