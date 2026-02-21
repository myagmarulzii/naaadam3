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

        @auth
            <a href="{{ route('profile.show') }}">Профайл</a>
            @if(auth()->user()->isAdmin())
                <a href="{{ route('admin.dashboard') }}">Админ</a>
            @endif
            <form method="post" action="{{ route('logout') }}" class="inline-form">
                @csrf
                <button type="submit" class="link-button">Гарах</button>
            </form>
        @else
            <a href="{{ route('login') }}">Нэвтрэх</a>
        @endauth
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
