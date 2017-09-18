<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 8/30/17
 * Time: 6:24 PM
 */
?>

<div class="comments">

    <ul class="list-group">

        @foreach ($post->comments as $comment)

            <li class="list-group-item">

                <div class="col-md-12">
                    {{ $comment->body }}
                </div>

                <div class="col-md-12">
                    <p class="blog-post-meta">
                        {{ $comment->created_at->diffForHumans() }}
                    </p>
                </div>

            </li>
        @endforeach

    </ul>
</div>
