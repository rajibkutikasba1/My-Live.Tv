<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amar Desh Live TV</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />
</head>
<body class="bg-gray-900 text-white font-sans">

    <div class="bg-red-600 p-4 shadow-md sticky top-0 z-50 flex justify-between items-center">
        <h1 class="text-xl font-bold tracking-wide">📺 আমার দেশ Live TV</h1>
    </div>

    <div class="w-full max-w-3xl mx-auto mt-2 p-2">
        <div class="bg-black rounded-lg overflow-hidden shadow-2xl aspect-video">
            <video id="live-player" class="video-js vjs-default-skin vjs-big-play-centered w-full h-full" controls preload="auto" poster="https://placehold.co/640x360/000000/FFFFFF?text=Select+a+Channel">
                <p class="vjs-no-js">To view this video please enable JavaScript</p>
            </video>
        </div>
        <h2 id="now-playing" class="mt-3 text-lg font-semibold text-red-400 text-center">চ্যানেল সিলেক্ট করুন</h2>
    </div>

    <hr class="border-gray-800 my-4">

    <div class="max-w-4xl mx-auto px-4 pb-10">
        <h3 class="text-md uppercase tracking-wider text-gray-400 mb-3 font-semibold">সকল চ্যানেল সমূহ:</h3>
        <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-4">
            
            <div onclick="playChannel('https://cph-p2p-msl.akamaized.net/hls/live/2000341/test/master.m3u8', 'Somoy TV')" 
                 class="bg-gray-800 p-3 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:bg-gray-700 transition duration-200 border border-gray-700 shadow-sm active:scale-95">
                <img src="https://images.prothomalo.com/prothomalo-bangla/2021-04/18bb817f-7b70-4d87-9bc6-37c2fb24076e/somoy.jpg" alt="Somoy TV" class="w-16 h-16 object-contain rounded-lg mb-2 bg-white p-1">
                <span class="text-xs text-center font-medium truncate w-full">Somoy TV</span>
            </div>

            <div onclick="playChannel('https://content.jwplatform.com/manifests/vM7nH0Cc.m3u8', 'Jamuna TV')" 
                 class="bg-gray-800 p-3 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:bg-gray-700 transition duration-200 border border-gray-700 shadow-sm active:scale-95">
                <img src="https://placehold.co/150x150/png?text=Jamuna" alt="Jamuna TV" class="w-16 h-16 object-contain rounded-lg mb-2 bg-white p-1">
                <span class="text-xs text-center font-medium truncate w-full">Jamuna TV</span>
            </div>

            </div>
    </div>

    <script src="https://vjs.zencdn.net/8.3.0/video.js"></script>
    <script>
        var player = videojs('live-player');
        // প্রথম লোডেই যেন প্রথম চ্যানেলটি প্লে হয় তার জন্য
        player.src({ src: 'https://cph-p2p-msl.akamaized.net/hls/live/2000341/test/master.m3u8', type: 'application/x-mpegURL' });
        document.getElementById('now-playing').innerText = "এখন দেখছেন: Somoy TV";

        function playChannel(url, name) {
            player.src({ src: url, type: 'application/x-mpegURL' });
            document.getElementById('now-playing').innerText = "এখন দেখছেন: " + name;
            player.play();
            window.scrollTo({top: 0, behavior: 'smooth'});
        }
    </script>
</body>
</html>
