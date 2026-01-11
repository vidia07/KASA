@props([
    'image',
    'slug' => '#'
])

<div class="min-w-[160px]">
    <a 
        href="{{ url('/dramas/' . $slug) }}"
        class="group block"
    >
        <div class="overflow-hidden rounded-xl">
            <img 
                src="{{ $image }}" 
                alt="Drama Poster"
                class="w-40 h-56 object-cover shadow-lg 
                       transition-transform duration-300 
                       group-hover:scale-105"
            >
        </div>
    </a>
</div>