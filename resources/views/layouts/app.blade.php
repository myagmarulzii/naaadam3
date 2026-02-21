<!DOCTYPE html>
<html lang="mn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Эрийн гурван наадам')</title>
    <link rel="stylesheet" href="/css/naadam.css">
</head>
<body>
<header class="header">
    <div>
        <h1>Эрийн гурван наадам</h1>
        <small>Үндэсний их баяр наадам · Оролцогчдын цол, эрэмбэ</small>
    </div>
    <nav>
        <a href="{{ route('home') }}">Нүүр</a>
        <a href="{{ route('profile.show') }}">Профайл</a>
        <a href="{{ route('admin.dashboard') }}">Админ</a>
    </nav>
</header>
<main class="container">
    @if(session('status'))
        <div class="notice">{{ session('status') }}</div>
    @endif
    @yield('content')
</main>
</body>
</html>
