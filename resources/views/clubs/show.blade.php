<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    {{-- Makes the page display correctly on phones. --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $club->name }} - Matchday</title>
</head>

<body>

    <header>
        <h1>Matchday</h1>

        <nav>
            <a href="/clubs">Clubs</a>
        </nav>
    </header>

    <main>

        <h2>{{ $club->name }}</h2>

        <p>
            <strong>Stadium:</strong>
            {{ $club->stadium }}
        </p>

        <p>
            <strong>City:</strong>
            {{ $club->city }}
        </p>

        @if ($club->description)
            <p>
                {{ $club->description }}
            </p>
        @endif

        <p>
            <a href="/clubs">← Back to clubs</a>
        </p>

    </main>

</body>

</html>