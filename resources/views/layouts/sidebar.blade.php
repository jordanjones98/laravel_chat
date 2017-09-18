<?php
/**
 * Created by PhpStorm.
 * User: Jordan
 * Date: 8/28/17
 * Time: 5:07 PM
 */
?>

<div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <p>
        I am a web developer based in Madison Wisconsin. This blog is one of my side projects to help me learn Laravel.
        (I know, making a blog, cliche right?)
    </p>
</div>
<div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
        @foreach ($archives as $stats)
            <li>
                <a href="/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                    {{ $stats['month'] . ' ' . $stats['year'] }}
                </a>
            </li>
        @endforeach
    </ol>
</div>
<div class="sidebar-module">
    <h4>Elsewhere</h4>
    <ol class="list-unstyled">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
    </ol>
</div>

