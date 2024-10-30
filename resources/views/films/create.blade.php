<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<header class="bg-white">
    <nav class="mx-auto flex    items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Pol Tordera Gil</span>
                <p class="text-2xl font-bold text-gray-800">Pol Tordera Gil</p>
            </a>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <div class="rounded-full bg-red-200 p-2 hover:bg-red-300">
                <a href="/skinindex" class="text-2xl font-bold leading-6 text-gray-900">Skins DB</a>
            </div>
            <div class="rounded-full bg-blue-200 p-2 hover:bg-blue-300">
                <a href="/films" class="text-2xl font-bold leading-6 text-gray-900">Films DB</a>
            </div>

        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900"><span aria-hidden="true"></span></a>
        </div>
    </nav>

    <!-- Sección Hero -->
</header>
<div class="py-6"></div>
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Add New Film</h1>
    <form action="/store" method="POST">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Title:</label>
            <input type="text" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter film title">
        </div>

        <div class="mb-4">
            <label for="director" class="block text-sm font-medium text-gray-700">Director:</label>
            <input type="text" name="director" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter director's name">
        </div>

        <div class="mb-4">
            <label for="year" class="block text-sm font-medium text-gray-700">Release Year:</label>
            <input type="number" name="year" required class="mt-1 block w-full border border-gray-300 rounded-md p-2" placeholder="Enter release year">
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add Film</button>
    </form>
</div>
<footer class="py-6 text-center">
    <p class="text-black-600">© 2024 Pol Tordera Gil. All rights reserved.</p>
</footer>
</body>
</html>