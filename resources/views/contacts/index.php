<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>


    <div class="container mx-auto">

        <h1 class="text-2xl font-bold mb-2">Listado de contactos</h1>

        <form action="/contacts" class="w-full max-w-sm">

            <div class="flex items-center border-b border-teal-500 py-2">
                
                <input type="text" name="search" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" placeholder="Buscar" aria-label="Full name">
                <button class="flex-shrink-0 bg-teal-500 hover:bg-teal-700 border-teal-500 hover:border-teal-700 text-sm border-4 text-white py-1 px-2 rounded">
                    Buscar
                </button>
            </div>
        </form>
        <a href="/contacts/create">Crear Contacto</a>

        <ul class="list-disc list-inside">
            <?php foreach ($contacts as $contact) : ?>
                <li>
                    <a href="/contacts/<?= $contact['id'] ?>">
                        <?= $contact['name']; ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>

    </div>


    <!-- <?php

            $paginate = 'contacts';

            require_once '../resources/views/assets/pagination.php' ?> -->

</body>

</html>