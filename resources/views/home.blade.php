<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KASA - Korean Drama Streaming</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <nav class="w-full py-4 flex items-center justify-between border-b border-gray-800">
        <div class="flex items-center pl-8 md:pl-12 lg:pl-16">
            <h1 class="text-4xl font-bold text-white">KASA</h1>
        </div>
        <div class="flex items-center pr-8 md:pr-12 lg:pr-16">
            <a href="#explore" class="bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-2 rounded-lg transition duration-300">
                Explore Now
            </a>
        </div>
    </nav>

    <section class="container mx-auto px-6 py-16">
        <div class="text-center mb-12">
            <h2 class="text-5xl font-bold mb-4">Welcome to KASA</h2>
            <p class="text-xl text-gray-400">Discover Your Favorite Korean Dramas</p>
        </div>

        <div id="explore" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 mt-12">
            <div class="drama-card bg-gray-800 rounded-lg overflow-hidden cursor-pointer hover:scale-105 transition-transform duration-300 shadow-lg">
                <img src="https://via.placeholder.com/300x450?text=Drama+1" alt="Drama Poster" class="w-full h-auto">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Drama Title 1</h3>
                    <p class="text-gray-400 text-sm">2024 • Romance</p>
                </div>
            </div>

            <div class="drama-card bg-gray-800 rounded-lg overflow-hidden cursor-pointer hover:scale-105 transition-transform duration-300 shadow-lg">
                <img src="https://via.placeholder.com/300x450?text=Drama+2" alt="Drama Poster" class="w-full h-auto">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Drama Title 2</h3>
                    <p class="text-gray-400 text-sm">2024 • Action</p>
                </div>
            </div>

            <div class="drama-card bg-gray-800 rounded-lg overflow-hidden cursor-pointer hover:scale-105 transition-transform duration-300 shadow-lg">
                <img src="https://via.placeholder.com/300x450?text=Drama+3" alt="Drama Poster" class="w-full h-auto">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Drama Title 3</h3>
                    <p class="text-gray-400 text-sm">2024 • Comedy</p>
                </div>
            </div>

            <div class="drama-card bg-gray-800 rounded-lg overflow-hidden cursor-pointer hover:scale-105 transition-transform duration-300 shadow-lg">
                <img src="https://via.placeholder.com/300x450?text=Drama+4" alt="Drama Poster" class="w-full h-auto">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Drama Title 4</h3>
                    <p class="text-gray-400 text-sm">2024 • Thriller</p>
                </div>
            </div>

            <div class="drama-card bg-gray-800 rounded-lg overflow-hidden cursor-pointer hover:scale-105 transition-transform duration-300 shadow-lg">
                <img src="https://via.placeholder.com/300x450?text=Drama+5" alt="Drama Poster" class="w-full h-auto">
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Drama Title 5</h3>
                    <p class="text-gray-400 text-sm">2024 • Drama</p>
                </div>
            </div>
        </div>
    </section>

    <div id="dramaModal" class="hidden fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 p-4">
        <div class="bg-gray-800 rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <h2 id="modalTitle" class="text-3xl font-bold"></h2>
                    <button id="closeModal" class="text-gray-400 hover:text-white text-2xl">&times;</button>
                </div>
                <img id="modalPoster" src="" alt="Drama Poster" class="w-full rounded-lg mb-4">
                <div id="modalInfo" class="space-y-2 mb-4">
                    <!-- Info akan diisi dengan JavaScript -->
                </div>
                <a id="modalLink" href="#" target="_blank" class="block w-full bg-red-600 hover:bg-red-700 text-white font-semibold px-6 py-3 rounded-lg text-center transition duration-300">
                    Watch Now
                </a>
            </div>
        </div>
    </div>

    <script>
        const dramas = [
            {
                title: "Drama Title 1",
                year: "2024",
                genre: "Romance",
                poster: "https://via.placeholder.com/300x450?text=Drama+1",
                description: "A beautiful love story that will touch your heart.",
                rating: "8.5/10",
                episodes: "16 episodes",
                watchLink: "https://example.com/watch/drama1"
            },
            {
                title: "Drama Title 2",
                year: "2024",
                genre: "Action",
                poster: "https://via.placeholder.com/300x450?text=Drama+2",
                description: "Thrilling action-packed drama with amazing fight scenes.",
                rating: "9.0/10",
                episodes: "20 episodes",
                watchLink: "https://example.com/watch/drama2"
            },
            {
                title: "Drama Title 3",
                year: "2024",
                genre: "Comedy",
                poster: "https://via.placeholder.com/300x450?text=Drama+3",
                description: "Laugh out loud with this hilarious comedy series.",
                rating: "8.0/10",
                episodes: "12 episodes",
                watchLink: "https://example.com/watch/drama3"
            },
            {
                title: "Drama Title 4",
                year: "2024",
                genre: "Thriller",
                poster: "https://via.placeholder.com/300x450?text=Drama+4",
                description: "Suspenseful thriller that will keep you on the edge of your seat.",
                rating: "9.2/10",
                episodes: "16 episodes",
                watchLink: "https://example.com/watch/drama4"
            },
            {
                title: "Drama Title 5",
                year: "2024",
                genre: "Drama",
                poster: "https://via.placeholder.com/300x450?text=Drama+5",
                description: "Emotional drama with powerful performances.",
                rating: "8.8/10",
                episodes: "18 episodes",
                watchLink: "https://example.com/watch/drama5"
            }
        ];

        document.querySelectorAll('.drama-card').forEach((card, index) => {
            card.addEventListener('click', () => {
                const drama = dramas[index];
                showModal(drama);
            });
        });

        function showModal(drama) {
            document.getElementById('modalTitle').textContent = drama.title;
            document.getElementById('modalPoster').src = drama.poster;
            document.getElementById('modalPoster').alt = drama.title;
            document.getElementById('modalLink').href = drama.watchLink;
            
            const modalInfo = document.getElementById('modalInfo');
            modalInfo.innerHTML = `
                <p class="text-gray-300"><strong>Year:</strong> ${drama.year}</p>
                <p class="text-gray-300"><strong>Genre:</strong> ${drama.genre}</p>
                <p class="text-gray-300"><strong>Rating:</strong> ${drama.rating}</p>
                <p class="text-gray-300"><strong>Episodes:</strong> ${drama.episodes}</p>
                <p class="text-gray-300 mt-4">${drama.description}</p>
            `;
            
            document.getElementById('dramaModal').classList.remove('hidden');
        }

        document.getElementById('closeModal').addEventListener('click', () => {
            document.getElementById('dramaModal').classList.add('hidden');
        });

        document.getElementById('dramaModal').addEventListener('click', (e) => {
            if (e.target.id === 'dramaModal') {
                document.getElementById('dramaModal').classList.add('hidden');
            }
        });
    </script>
</body>
</html>

