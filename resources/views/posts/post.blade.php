<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 8/28/17
 * Time: 10:43 PM
 */
?>

<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{ $post->id }}" class="blog-link">
            {{ $post->title }}
        </a>
    </h2>

    <p class="blog-post-meta">
        {{ $post->user->name }} on
        {{ $post->created_at->toFormattedDateString() }}
    </p>

    {{ $post->body }}

</div>

<hr>
