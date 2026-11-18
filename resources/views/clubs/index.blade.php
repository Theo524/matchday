<x-layout title="Premier League Clubs">

    <section class="page-heading">

        <h1>Premier League Clubs</h1>

        <p>
            Browse clubs and view information about their stadiums and locations.
        </p>

    </section>


    <section class="club-grid">

        {{-- Display every club retrieved from MySQL. --}}
        @foreach ($clubs as $club)

            <article class="club-card">

                <h2>{{ $club->name }}</h2>

                <p>
                    <strong>Stadium:</strong>
                    {{ $club->stadium }}
                </p>

                <p>
                    <strong>City:</strong>
                    {{ $club->city }}
                </p>

                <a href="{{ route('clubs.show', $club) }}">
                    View club →
                </a>

            </article>

        @endforeach

    </section>

</x-layout>