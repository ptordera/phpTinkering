<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <!-- CSS de Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
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
<section>
<div class="fondo-container fixed inset-0 flex">
    <div id="fondo-izquierda" class="w-1/2 h-full">
        <img src="https://profilerr.net/static/content/thumbs/440x248/1/ce/vnsapr-66d8b8742cd6643a050462f10ad39ce1.png" alt="fondo" class="w-full h-full object-cover blur-3xl">
    </div>
    <div id="fondo-derecha" class="w-1/2 h-full">
        <img src="https://wallpapers.com/images/featured/movie-9pvmdtvz4cb0xl37.jpg" alt="fondo" class="w-full h-full object-cover">
    </div>
</div>

<style>
    .fondo-container {
        z-index: -1; /* Para que esté detrás de todos los demás elementos */
    }
    #fondo-izquierda img,
    #fondo-derecha img {
        filter: blur(15px); /* Adjust the blur radius as needed */
    }
</style>

<!-- Sección de Servicios -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-24">
            <h1 class=" text-5xl font-bold tracking-tight text-gray-800 sm:text-7xl dark:text-white" style="text-shadow: 4px 4px 4px rgba(240, 240, 240, 0.7);">
                <span id="text1" class="">
                    My
                </span>
                <span id="text2" class="">
                    Data
                </span>
                <span id="text3" class="">
                    Bases
                </span>
            </h1>
            <p class="text-black mt-4 font-bold">Get to know my databases and modify them.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="w-full px-4 mb-8">
                <a href="/skinindex">
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                        <h3 class="text-3xl font-bold mb-4">Skins DB</h3>
                        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
                            <table class="min-w-full mt-4 bg-white border border-gray-300">
                                <thead>
                                <tr class="bg-red-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">ID</th>
                                    <th class="py-3 px-6 text-left">Skin</th>
                                    <th class="py-3 px-6 text-left">Collection</th>
                                    <th class="py-3 px-6 text-left">Price</th>
                                    <th class="py-3 px-6 text-left">Float</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </a>
            </div>
            <div class="w-full px-4 mb-8">
                <a href="/films">
                    <div class="bg-white rounded-lg shadow-lg p-6 text-center">
                        <h3 class="text-3xl font-bold mb-4">Films DB</h3>
                        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
                            <table class="min-w-full mt-4 bg-white border border-gray-300">
                                <thead>
                                <tr class="bg-blue-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">ID</th>
                                    <th class="py-3 px-6 text-left">Title</th>
                                    <th class="py-3 px-6 text-left">Director</th>
                                    <th class="py-3 px-6 text-left">Year</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Pie de Página -->
<footer class="py-6 text-center mt-48">
    <p class="text-black-600">© 2024 Pol Tordera Gil. All rights reserved.</p>
</footer>
</section>
</html>
