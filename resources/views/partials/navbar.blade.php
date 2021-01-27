<div class="navbar navbar-dark bg-info">
    @if (Route::has('login'))
        <div class="nav-item">
            @auth
                <a href="{{ url('/home') }}" class="navbar-brand">Home</a>
            @else
                <a href="{{ route('login') }}" class="navbar-brand">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="navbar-brand ">Register</a>
                @endif
            @endauth
        </div>
    @endif
</div>