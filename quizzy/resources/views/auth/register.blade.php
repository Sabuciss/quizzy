<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h1>Reģistrācija</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Lietotājvārds:</label>
        <input type="text" name="username" required><br><br>

        <label>Parole:</label>
        <input type="password" name="password" required><br><br>

        <label>Atkārtot paroli:</label>
        <input type="password" name="password_confirmation" required><br><br>

        <button type="submit">Reģistrēties</button>
    </form>

    <p>Jau ir konts? <a href="{{ route('login.form') }}">Ienākt</a></p>
</body>
</html>
