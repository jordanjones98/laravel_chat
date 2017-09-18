<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 8/28/17
 * Time: 10:40 PM
 */
?>
@if (count($errors))

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach
        </ul>
    </div>

@endif
