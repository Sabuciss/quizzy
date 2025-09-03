<header>
    <nav>
        <a href="{{ route('quiz.index') }}">Sākums</a>

        @auth
            {{-- Show for logged in users --}}

            <form method="POST" action="{{ route('logout') }}" style="display:inline">
                @csrf
                <button type="submit">Izrakstīties</button>
            </form>
        @else
            {{-- Show for guests --}}
            <a href="{{ route('login.form') }}">Ienākt</a>
            <a href="{{ route('register.form') }}">Reģistrēties</a>
        @endauth
    </nav>
</header>
