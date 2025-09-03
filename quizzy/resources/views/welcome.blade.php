<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <x-navigation></x-navigation>
    
    <h1>Ellooo there</h1>

    @guest
        <a href="{{ route('login.form') }}">Ienākt</a>
        <a href="{{ route('register.form') }}">Reģistrēties</a>
    @else
        <p>Sveiks, {{ auth()->user()->username }}!</p>
        <a href="{{ route('quiz.index') }}">Sākt Quiz</a>
    @endguest
</body>
</html>
