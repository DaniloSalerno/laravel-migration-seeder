<header>
    <nav class="navbar navbar-expand navbar-light bg-dark p-0">
        <div class="container">
            <div class="nav navbar-nav align-items-center">
                <a class="logo pe-5" href="{{route('home')}}"> Trains </a>
                <a class="nav-link py-4 {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href=" {{route('home')}} ">Home</a>
                <a class="nav-link py-4 {{ Route::currentRouteName() === 'trains' ? 'active' : '' }}" href=" {{route('trains')}} ">Trains</a>
            </div>
        </div>
    </nav>
</header>