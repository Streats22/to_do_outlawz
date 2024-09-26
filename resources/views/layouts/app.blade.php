<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Outlawz - Todo</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class=" max-w-screen min-h-screen bg-amber-400 flex justify-center items-center">
<div class="bg-white w-[75%] h-[80%] rounded-lg shadow-2xl p-5">


    <h1 class="text-3xl font-bold flex justify-center mt-5  items-center  gap-5">
        Made for <img class="w-24 rounded-lg bg-black p-3" src="https://outlawz.nl/wp-content/uploads/Group-4.png">
    </h1>
    @livewireScripts
    <div class="w-auto">
        {{ $slot }}
    </div>
</div>
</body>
</html>
