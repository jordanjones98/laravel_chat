<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 9/4/17
 * Time: 7:00 PM
 */
?>

<style>
    #flash-message {
        position: absolute;
        z-index: 10;
        bottom: 20px;
        right: 20px;
    }
</style>

<script>
    $('#flash-message').delay(500).fadeIn('normal', function() {
        $(this).delay(2500).fadeOut();
    });
</script>

@if ($flash = session('message'))
    <div id="flash-message" class="alert alert-success custom-alert" role="alert">
        {{ $flash }}
    </div>
@endif
