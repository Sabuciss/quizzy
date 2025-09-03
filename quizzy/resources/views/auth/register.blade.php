<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Reģistrācija</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<x-navigation></x-navigation>

<h1>Reģistrēties</h1>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <label>Lietotājvārds</label>
    <input type="text" name="username" value="{{ old('username') }}" required><br><br>

    <label>Parole:</label>
    <input type="password" name="password" required><br><br>

    <label>Atkārtot paroli:</label>
    <input type="password" name="password_confirmation" required><br><br>

    <button>Reģistrēties</button>
</form>

</body>
</html>