<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skins</title>
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
<div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h1 class="text-3xl font-bold mb-4">Skins</h1>
    <a href="/skincreate" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Add New Skin</a>
    <a href="/" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Back</a>
    <table class="min-w-full mt-4 bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
            <th class="py-3 px-6 text-left">ID</th>
            <th class="py-3 px-6 text-left">Skin</th>
            <th class="py-3 px-6 text-left">Collection</th>
            <th class="py-3 px-6 text-left">Price</th>
            <th class="py-3 px-6 text-left">Float</th>
            <th class="py-3 px-6 text-center">Actions</th>
        </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
        <?php if (empty($skins)): ?>
        <tr>
            <td colspan="5" class="py-3 px-6 text-center">There are no Skins available.</td>
        </tr>
        <?php else: ?>
            <?php foreach ($skins as $skin): ?>
        <tr class="border-b border-gray-200 hover:bg-gray-100">
            <td class="py-3 px-6"><?=$skin['id'] ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($skin['name']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($skin['collection']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($skin['price']) ?></td>
            <td class="py-3 px-6"><?= htmlspecialchars($skin['floatcs']) ?></td>
            <td class="py-3 px-6 text-center">
                <a href="/skinedit/<?= $skin['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-4">Edit</a>
                <a href="/skindelete/<?= $skin['id'] ?>" class="text-red-500 hover:text-red-700 mr-4">Delete</a>
                <a href="/skinshow/<?= $skin['id'] ?>" class="text-green-500 hover:text-green-700 ">Show</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php endif; ?>

        </tbody>
    </table>
</div>
<footer class="py-6 text-center">
    <p class="text-black-600">© 2024 Pol Tordera Gil. All rights reserved.</p>
</footer>
</body>
</html>