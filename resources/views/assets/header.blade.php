<header>
    <nav class=" navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Nauchpock</a>
        <div class="d-flex justify-content-between collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
            </ul>
            <form class="d-flex  form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>


            @auth
                {{auth()->user()->username}}
                <div class="text-end">
                    <a href="/logout" class="btn btn-outline-primary my-2 my-sm-0" type="submit">Log out</a>
                </div>
            @endauth
            @guest
                <div class="text-end">
                    <a  href="/login" class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sign in</a>
                    <a href="/register" class="btn btn-outline-primary my-2 my-sm-0" type="submit">Sing up</a>
                </div>
            @endguest

        </div>
    </nav>
</header>
