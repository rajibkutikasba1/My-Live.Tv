<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amar Desh Live TV</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

    <div class="bg-red-600 p-4 shadow-md sticky top-0 z-50 flex justify-between items-center">
        <h1 class="text-xl font-bold tracking-wide">📺 আমার দেশ Live TV</h1>
    </div>

    <div class="w-full max-w-3xl mx-auto mt-2 p-2">
        <div class="bg-black rounded-lg overflow-hidden shadow-2xl aspect-video">
            <iframe id="live-player" class="w-full h-full" src="https://www.youtube.com/embed/live_stream?channel=UC9mCOB_L8Y_e-tUvSndbLnw&autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <h2 id="now-playing" class="mt-3 text-lg font-semibold text-red-400 text-center">এখন দেখছেন: Somoy TV (Live)</h2>
    </div>

    <hr class="border-gray-800 my-4">

    <div class="max-w-4xl mx-auto px-4 pb-10">
        <h3 class="text-md uppercase tracking-wider text-gray-400 mb-3 font-semibold">সকল চ্যানেল সমূহ:</h3>
        <div class="grid grid-cols-3 sm:grid-cols-4 gap-4">
            
            <div onclick="playChannel('UC9mCOB_L8Y_e-tUvSndbLnw', 'Somoy TV')" 
                 class="bg-gray-800 p-3 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:bg-gray-700 transition duration-200 border border-gray-700 shadow-sm active:scale-95">
                <img src="https://images.prothomalo.com/prothomalo-bangla/2021-04/18bb817f-7b70-4d87-9bc6-37c2fb24076e/somoy.jpg" alt="Somoy TV" class="w-16 h-16 object-contain rounded-lg mb-2 bg-white p-1">
                <span class="text-xs text-center font-medium truncate w-full">Somoy TV</span>
            </div>

            <div onclick="playChannel('UC79pI9mXvBqg5f26mE_7kEw', 'Jamuna TV')" 
                 class="bg-gray-800 p-3 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:bg-gray-700 transition duration-200 border border-gray-700 shadow-sm active:scale-95">
                <img src="https://placehold.co/150x150/png?text=Jamuna" alt="Jamuna TV" class="w-16 h-16 object-contain rounded-lg mb-2 bg-white p-1">
                <span class="text-xs text-center font-medium truncate w-full">Jamuna TV</span>
            </div>

        </div>
    </div>

    <script>
        function playChannel(channelId, name) {
            var iframe = document.getElementById('live-player');
            // চ্যানেল আইডি অনুযায়ী ইউটিউব লাইভ চেঞ্জ করা
            iframe.src = "https://www.youtube.com/embed/live_stream?channel=" + channelId + "&autoplay=1";
            document.getElementById('now-playing').innerText = "এখন দেখছেন: " + name + " (Live)";
            window.scrollTo({top: 0, behavior: 'smooth'});
        }
    </script>
</body>
</html>
