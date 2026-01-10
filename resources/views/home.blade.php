@extends('layouts.app')

@section('title', 'Home | KASA')

@section('content')
<section class="container mx-auto px-6 py-24 bg-gradient-to-b from-blue-800/40 to-black">
    <div class="text-center mt-16">
        <h1 class="mb-6 text-4xl font-bold tracking-tight leading-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
            Welcome to KASA
        </h1>

        <p class="mb-6 max-w-3xl mx-auto text-lg text-gray-400">
            KASA is a Korean drama streaming platform where you can watch curated series with seamless access and an enjoyable viewing experience.
        </p>

        <a href="#"
            class="inline-flex items-center px-6 py-3 font-medium text-white rounded-lg"
            style="background-color:#A10B0B;">
            Explore Now
        </a>
    </div>
</section>
<section class="bg-black py-24">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto grid gap-12 md:grid-cols-3">

            <div class="bg-gray-900 rounded-2xl p-8 text-center hover:bg-gray-800 transition">
                <img src="https://images.justwatch.com/poster/335002706/s166/twinkling-watermelon.avif" alt="All in One" class="mx-auto mb-6 h-40">

                <p class="text-sm uppercase tracking-wide text-red-500 mb-2">
                    All in one place
                </p>

                <h2 class="text-xl font-semibold text-white mb-4">
                    Complete Drama Details
                </h2>

                <p class="text-gray-400 text-sm">
                    Explore Korean dramas with complete information including synopsis,
                    genres, cast, ratings, and release year — all in one place.
                </p>
            </div>

            <div class="bg-gray-900 rounded-2xl p-8 text-center hover:bg-gray-800 transition">
                <img src="https://images.justwatch.com/poster/320028557/s166/home-school.avif" alt="Search Drama" class="mx-auto mb-6 h-40">

                <p class="text-sm uppercase tracking-wide text-red-500 mb-2">
                    One search
                </p>

                <h2 class="text-xl font-semibold text-white mb-4">
                    Find Your Favorite Drama
                </h2>

                <p class="text-gray-400 text-sm">
                    Search Korean dramas easily by title, genre, or release year
                    and discover detailed information instantly.
                </p>
            </div>

            <div class="bg-gray-900 rounded-2xl p-8 text-center hover:bg-gray-800 transition">
                <img src="https://images.justwatch.com/poster/321667436/s166/family-by-choice.avif" alt="Drama Recommendations" class="mx-auto mb-6 h-40">

                <p class="text-sm uppercase tracking-wide text-red-500 mb-2">
                    Curated picks
                </p>

                <h2 class="text-xl font-semibold text-white mb-4">
                    Recommended Dramas
                </h2>

                <p class="text-gray-400 text-sm">
                    Discover popular and editor-recommended Korean dramas to help
                    you decide what to watch next.
                </p>
            </div>

        </div>
    </div>
</section>
@endsection