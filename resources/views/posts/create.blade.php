<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 8/28/17
 * Time: 5:22 PM
 */
?>

@extends('layouts.main')

@section('content')

    <h1>Create a post</h1>

    <hr>

    <form method="POST" action="/posts">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>

        <div class="form-group">
            <label for="exampleTextarea">Blog Body</label>
            <textarea class="form-control" id="exampleTextarea" name="body" rows="15"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
    </form>

    @include('layouts.errors')

@endsection
