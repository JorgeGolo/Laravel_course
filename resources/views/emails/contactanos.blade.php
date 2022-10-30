<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        h1 {color:blue}

    </style>
</head>
<body>
    <h1>Correo Electrónico</h1>
    <p>Primer mail que mando por Laravel</p>
    {{$propiedad}}

    <p><strong>Nombre:</strong> {{$contacto['name']}}</p>
    <p><strong>Nombre:</strong> {{$contacto['email']}}</p>
    <p><strong>Nombre:</strong> {{$contacto['mensaje']}}</p>
</body>
</html>