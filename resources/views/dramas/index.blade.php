@extends('layouts.blank')

@section('title', 'KASA | Korean Dramas')

@section('content')
    <section class="bg-black">
        <div class="pl-8 md:pl-12 lg:pl-16">

            <div class="mt-16">
                <h2 class="text-xl md:text-3xl font-bold text-white mb-4">
                    Korean Dramas
                </h2>
            </div>

            <div class="horizontal-scroll overflow-x-auto overflow-y-hidden pb-3">
                <div class="flex gap-3 pr-8 md:pr-12 lg:pr-16 w-max">
                    <x-drama-card image="https://images.justwatch.com/poster/307488776/s166/i-am-nobody.avif" />
                    <x-drama-card image="https://images.justwatch.com/poster/317328747/s166/season-1.avif" />
                    <x-drama-card image="https://images.justwatch.com/poster/330115674/s166/the-haunted-palace.avif" />
                    <x-drama-card image="https://images.justwatch.com/poster/340070498/s166/season-1.avif" />
                    <x-drama-card image="https://images.justwatch.com/poster/307488776/s166/i-am-nobody.avif" />
                    <x-drama-card image="https://images.justwatch.com/poster/317328747/s166/season-1.avif" />
                </div>
            </div>
        </div>
        </div>

        </div>
    </section>
@endsection