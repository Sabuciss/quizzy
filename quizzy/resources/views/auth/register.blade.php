<x-layout>
    <div class="container">
        <div class="register-box">
            <h1>Reģistrācija</h1>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <label>
                    Lietotājvārds<br>
                    <input type="text" name="username" required><br><br>
                </label>

                <label>
                    Parole<br>
                    <input type="password" name="password" required><br><br>
                </label>

                <label>
                    Atkārtot paroli<br>
                    <input type="password" name="password_confirmation" required><br><br>
                </label>

                <button type="submit">Reģistrēties</button>
            </form>

            <p>Jau ir konts? <a href="{{ route('login.form') }}">Ienākt</a></p>
        </div>
    </div>
</x-layout>
