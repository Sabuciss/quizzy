<x-layout>
    <div class="container">
        <div class="login-box">
            <h1>Login</h1><br>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label>
                    Lietotājvārds<br>
                    <input type="text" name="username" required><br><br>
                </label>

                <label>
                    Parole<br>
                    <input type="password" name="password" required><br><br>
                </label>

                <button type="submit">Login</button><br><br>
            </form>


            <p>Nav konta? <a href="{{ route('register.form') }}">Reģistrēties</a></p>
        </div>
    </div>
</x-layout>
