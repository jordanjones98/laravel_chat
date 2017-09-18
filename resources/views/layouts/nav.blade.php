<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="#">New features</a>

            @if (Auth::check())
                <a class="nav-link ml-auto" href="#"> {{Auth::user()->name}}</a>
                <a class="nav-link" href="/posts/create">Create Post</a>
                <li class="nav-link">
                    <form action="/logout" method="Post">
                        {{csrf_field()}}
                        <input type="submit" class="" value="Logout">
                    </form>
                </li>
            @else
                <a class="nav-link ml-auto" href="/login">Login</a>
            @endif
        </nav>


    </div>
</div>