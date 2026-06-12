<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudi Live TV</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />
</head>
<body class="bg-gray-900 text-white font-sans">

    <div class="bg-green-700 p-4 shadow-md sticky top-0 z-50 flex justify-between items-center">
        <h1 class="text-xl font-bold tracking-wide">🇸🇦 Saudi Arabia Live TV</h1>
    </div>

    <div class="w-full max-w-3xl mx-auto mt-2 p-2">
        <div class="bg-black rounded-lg overflow-hidden shadow-2xl aspect-video">
            <video id="live-player" class="video-js vjs-default-skin vjs-big-play-centered w-full h-full" controls preload="auto" poster="https://placehold.co/640x360/000000/FFFFFF?text=Select+a+Channel">
                <p class="vjs-no-js">To view this video please enable JavaScript</p>
            </video>
        </div>
        <h2 id="now-playing" class="mt-3 text-lg font-semibold text-green-400 text-center">এখন দেখছেন: Saudi TV 1</h2>
    </div>

    <hr class="border-gray-800 my-4">

    <div class="max-w-4xl mx-auto px-4 pb-10">
        <h3 class="text-md uppercase tracking-wider text-gray-400 mb-3 font-semibold">সকল সৌদি চ্যানেল সমূহ:</h3>
        <div class="grid grid-cols-3 sm:grid-cols-4 gap-4">
            
            <div onclick="playChannel('https://sewar.media/live/sauditv/index.m3u8', 'Saudi TV 1')" 
                 class="bg-gray-800 p-3 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:bg-gray-700 transition border border-gray-700 shadow-sm active:scale-95">
                <img src="https://placehold.co/150x150/059669/FFFFFF?text=Saudi+1" alt="Saudi TV 1" class="w-16 h-16 object-contain rounded-lg mb-2 bg-white p-1">
                <span class="text-xs text-center font-medium truncate w-full">Saudi TV 1</span>
            </div>

            <div onclick="playChannel('https://sewar.media/live/sbc/index.m3u8', 'SBC TV')" 
                 class="bg-gray-800 p-3 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:bg-gray-700 transition border border-gray-700 shadow-sm active:scale-95">
                <img src="https://placehold.co/150x150/059669/FFFFFF?text=SBC" alt="SBC" class="w-16 h-16 object-contain rounded-lg mb-2 bg-white p-1">
                <span class="text-xs text-center font-medium truncate w-full">SBC TV</span>
            </div>

            <div onclick="playChannel('https://sewar.media/live/alekhbariya/index.m3u8', 'Al Ekhbariya')" 
                 class="bg-gray-800 p-3 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:bg-gray-700 transition border border-gray-700 shadow-sm active:scale-95">
                <img src="https://placehold.co/150x150/059669/FFFFFF?text=News" alt="Al Ekhbariya" class="w-16 h-16 object-contain rounded-lg mb-2 bg-white p-1">
                <span class="text-xs text-center font-medium truncate w-full">Al Ekhbariya</span>
            </div>

        </div>
    </div>

    <script src="https://vjs.zencdn.net/8.3.0/video.js"></script>
    <script>
        var player = videojs('live-player');
        
        // অ্যাপ ওপেন হলেই যেন প্রথম চ্যানেলটি অটোমেটিক লোড হয়
        player.src({ src: 'https://sewar.media/live/sauditv/index.m3u8', type: 'application/x-mpegURL' });
        player.play();

        function playChannel(url, name) {
            player.src({ src: url, type: 'application/x-mpegURL' });
            document.getElementById('now-playing').innerText = "এখন দেখছেন: " + name;
            player.play();
            window.scrollTo({top: 0, behavior: 'smooth'});
        }
    </script>
</body>
</html>
