<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Inmobiliaria</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0056b3;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.9);
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="php/registrar.php" method="post">
        <h1>Registro de Producto</h1>
        <label for="Nombre_P">Nombre del Producto</label>
        <input type="text" name="Nombre_P" value="Producto 1">

        <label for="Descripcion_P">Descripción</label>
        <input type="text" name="Descripcion_P" value="Este es un producto">

        <label for="Precio_P">Precio</label>
        <input type="number" name="Precio_P" value="1000">

        <label for="Descuento_P">Descuento</label>
        <input type="number" name="Descuento_P" value="0">

        <label for="Disponibilidad">Disponibilidad</label>
        <input type="number" name="Disponibilidad" value="10">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
