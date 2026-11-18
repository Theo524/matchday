@props(['title' => 'Matchday'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    {{-- Makes the site responsive on mobile devices. --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }} - Matchday</title>

    {{-- Our main stylesheet. --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header class="site-header">
        <div class="container nav-container">

            <a href="{{ route('home') }}" class="logo">
                Matchday
            </a>

            <nav>
                <a
                    href="{{ route('home') }}"
                    class="{{ request()->routeIs('home') ? 'active' : '' }}"
                >
                    Home
                </a>

                <a
                    href="{{ route('clubs.index') }}"
                    class="{{ request()->routeIs('clubs.*') ? 'active' : '' }}"
                >
                    Clubs
                </a>
            </nav>

        </div>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

    <footer>
        <div class="container">
            <p>Matchday - Premier League Football</p>
        </div>
    </footer>

</body>

</html>