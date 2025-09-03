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

<form method="POST">
    @csrf

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <label>Lietotājvārds</label>
    <input type="username" name="username" value="{{ old('username') }}" required><br><br>

    <label>Loma:</label>
    <select name="role" required>
        <option value="">-- Izvēlies --</option>
        <option value="student" @selected(old('role') === 'admin')>Administrators</option>
        <option value="teacher" @selected(old('role') === 'teacher')></option>
    </select><br><br>

    <label>Parole:</label>
    <input type="password" name="password" required><br><br>

    <label>Atkārtot paroli:</label>
    <input type="password" name="password_confirmation" required><br><br>

    <button>Reģistrēties</button>
</form>
</body>
</html>