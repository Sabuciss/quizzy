<header>
    <nav>
        <a href="{{ route('quiz.index') }}">Sākums</a>

        @auth
            @can('access-admin-features')
                {{-- Prieks admin --}}
                <a href="{{ route('quiz.create') }}">Izveidot Testu</a>
            @endcan

            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                @csrf
                <button type="submit">Izrakstīties</button>
            </form>
        @else
            {{-- Guests --}}
            <a href="{{ route('login.form') }}">Ienākt</a>
            <a href="{{ route('register.form') }}">Reģistrēties</a>
        @endauth
    </nav>
</header>