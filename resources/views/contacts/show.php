<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Contacto</title>
</head>
<body>
    <h1>Detalle del Contacto</h1>
    <p>Nombre: <?= $contact['name'] ?></p>
    <p>Email: <?= $contact['email'] ?></p>
    <p>Telefono: <?= $contact['phone'] ?></p>

    <a href="/contacts">Volver</a>
    <a href="/contacts/<?= $contact['id']?>/edit">Editar</a>
   <form action="/contacts/<?= $contact['id'] ?>/delete" method="post">
    <button>
        Eliminar
    </button>
   </form>
</body>
</html>