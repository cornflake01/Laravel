<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind task check</title>
    @vite('resources/css/app.css') {{-- For Tailwind CSS --}}
</head>

<body class="bg-gray-100 text-center">

    {{-- Navbar --}}
    <nav class="bg-blue-600 p-4 mb-6 font-poppins">
        <a href="/" class="px-4 text-pinkCustom hover:text-pink-500 hover:underline font-bold">Home</a>
        <a href="/greet" class="px-4 text-pinkCustom hover:text-pink-500 hover:underline font-bold">Greet</a>
        <a href="/tasks" class="px-4 text-pinkCustom hover:text-pink-500 hover:underline font-bold">Tasks</a>
    </nav>


    {{-- Main Content --}}
    <div class="container mx-auto p-4">
        @yield('content') {{-- This will include the content from other views --}}
    </div>


    {{-- Footer --}}
    <footer class="font-poppins text-pinkCustom text-xl">
        <p>&copy; This will be the homepage of the app for my finals.</p>
    </footer>

</body>

</html>
