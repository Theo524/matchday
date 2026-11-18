<x-layout :title="$club->name">

    <section class="club-details">

        <h1>{{ $club->name }}</h1>

        <div class="club-info">

            <p>
                <strong>Stadium:</strong>
                {{ $club->stadium }}
            </p>

            <p>
                <strong>City:</strong>
                {{ $club->city }}
            </p>

        </div>


        @if ($club->description)

            <p class="club-description">
                {{ $club->description }}
            </p>

        @endif


        <a href="{{ route('clubs.index') }}">
            ← Back to clubs
        </a>

    </section>

</x-layout>