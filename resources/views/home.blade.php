<x-layout title="Home">

    <section class="hero">

        <h1>Welcome to Matchday</h1>

        <p>
            Matchday is a Premier League football website where you can
            explore clubs, stadium information, fixtures and make match
            predictions.
        </p>

        <a href="{{ route('clubs.index') }}" class="button">
            Explore Clubs
        </a>

    </section>


    <section class="feature-grid">

        <div class="feature-card">
            <h2>Clubs</h2>

            <p>
                Browse Premier League clubs and learn about their stadiums
                and locations.
            </p>
        </div>


        <div class="feature-card">
            <h2>Fixtures</h2>

            <p>
                View current Premier League fixture information from a
                football API.
            </p>
        </div>


        <div class="feature-card">
            <h2>Predictions</h2>

            <p>
                Create and manage your own predictions for Premier League
                matches.
            </p>
        </div>

    </section>

</x-layout>