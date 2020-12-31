<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding-left: 8%">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Digital library</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("dashboard.home")}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("logout")}}">Logout</a>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("login")}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route("register")}}">Register</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
