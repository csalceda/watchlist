<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="{{ route('admin') }}">
      <img src="{{ asset('img/icon.jpg') }}" alt="" width="50" height="auto">
    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Shows</a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('shows') }}">All Shows</a>
                <a class="dropdown-item" href="{{ route('shows.create') }}">Add Show</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Genres</a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('genre') }}">All Genres</a>
                <a class="dropdown-item" href="{{ route('genre.create') }}">Add Genre</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Status</a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('status') }}">All Status</a>
                <a class="dropdown-item" href="{{ route('status.create') }}">Add Status</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav mr-3">
            <li class="nav-item mx-2 mt-2">
                <a href="{{ route('index') }}" class="border py-2 px-3">Go to website</a>
            </li>
            <li class="nav-item mx-2">
                <form action="{{ route('logout') }}" method="get">
                    @csrf
                    <button type="submit" class="btn btn-link">Logout</button>
                </form>
            </li>
        </ul>
    </div>
</nav>