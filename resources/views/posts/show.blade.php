<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 8/28/17
 * Time: 10:06 AM
 */
?>

@extends ('layouts.main')

@section('content')

    <h1>{{ $post->title }}</h1>

    <p>{{ $post->body }}</p>

    <hr>

    @include('comments.show')

    @include('comments.create')

@endsection
