<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

<form method="POST" action="{{ route('login') }}">
    @csrf
    <label>Lietotājvārds:</label>
    <input type="text" name="username" required>

    <label>Parole:</label>
    <input type="password" name="password" required>

    <button type="submit">Login</button>
</form>


    <p>Nav konta? <a href="{{ route('register.form') }}">Reģistrēties</a></p>
</body>
</html>
