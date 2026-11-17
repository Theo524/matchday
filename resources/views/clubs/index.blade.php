<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    {{-- Makes the page work properly on mobile screens. --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Premier League Clubs - Matchday</title>
</head>

<body>

    <header>
        <h1>Matchday</h1>

        <nav>
            <a href="/clubs">Clubs</a>
        </nav>
    </header>

    <main>

        <h2>Premier League Clubs</h2>

        <p>
            Browse Premier League clubs and view information about their stadiums.
        </p>

        {{-- Loop through the clubs retrieved from MySQL. --}}
        @foreach ($clubs as $club)

            <div>

                <h3>
                    <a href="/clubs/{{ $club->id }}">
                        {{ $club->name }}
                    </a>
                </h3>

                <p>
                    <strong>Stadium:</strong>
                    {{ $club->stadium }}
                </p>

                <p>
                    <strong>City:</strong>
                    {{ $club->city }}
                </p>

                <a href="/clubs/{{ $club->id }}">
                    View club
                </a>

            </div>

            <hr>

        @endforeach

    </main>

</body>

</html>