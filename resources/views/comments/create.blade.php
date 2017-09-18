<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 8/29/17
 * Time: 11:05 PM
 */

?>

{{--Add Comments--}}
<hr>

<div class="card">
    <div class="card-block">
        <form method="POST" action="/posts/{{ $post->id  }}/comments">

            {{ csrf_field() }}

            <div class="form-group">
                <textarea name="body" id="body" cols="30" rows="3" placeholder="Comment Here" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

        </form>

        @include('layouts.errors')
    </div>
</div>
