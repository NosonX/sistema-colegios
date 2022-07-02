<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="./public/assets/css/main.css">
</head>
<body>
    <h1>Homepage</h1>
    <form action="/sistema-colegios/create" method="post">
        <input type="text" name="email" />
        <input type="text" name="clave" />
        <input type="submit">
    </form>

    <h2>Lista de emails</h2>
    {foreach item=admin from=$admins}
        <p>{$admin->email}</p>
    {/foreach}
    <script src="./public/assets/js/main.js"></script>
</body>
</html>