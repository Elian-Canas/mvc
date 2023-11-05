<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Contacto</title>
</head>

<body>
    <h1>Actualizar Contacto</h1>

    <form action="/contacts/<?= $contact['id'] ?>" method="post">

        <div>
            <label for="name">Nombre</label>
            <input value="<?= $contact['name'] ?>" type="text" name="name" id="name">
        </div>

        <div>
            <label for="email">Email</label>
            <input value="<?= $contact['email'] ?>" type="email" name="email" id="email">
        </div>

        <div>

            <label for="phone">Telefono</label>
            <input value="<?= $contact['phone'] ?>" type="text" name="phone" id="phone">
        </div>

        <button type="submit">Actualizar</button>

    </form>
</body>

</html>