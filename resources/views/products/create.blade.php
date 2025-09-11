<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de Productos</title>
    <style>
        body {
            background: linear-gradient(135deg, #e0eafc 0%, #cfdef3 100%);
            font-family: 'Segoe UI', Arial, Helvetica, sans-serif;
            margin: 0;
            min-height: 100vh;
        }

        .barra-superior {
            width: 100%;
            background: linear-gradient(90deg, #26c6da 60%, #1976d2 100%);
            color: #fff;
            padding: 18px 0 14px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 12px #b2ebf2;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .logo {
            font-size: 1.5em;
            font-weight: bold;
            margin-left: 32px;
            letter-spacing: 2px;
            text-shadow: 1px 1px 8px #1976d2;
        }

        nav {
            margin-right: 32px;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            margin-left: 24px;
            font-size: 1.08em;
            font-weight: 500;
            transition: text-shadow 0.2s;
        }

        .nav-link:hover {
            text-shadow: 0 2px 8px #26c6da;
        }

        h1 {
            text-align: center;
            margin-top: 40px;
            color: #1976d2;
            letter-spacing: 2px;
            font-size: 2em;
            text-shadow: 1px 1px 8px #b2d8b2;
        }

        form {
            max-width: 400px;
            margin: 40px auto;
            background: linear-gradient(135deg, #fff 60%, #e0f7fa 100%);
            padding: 32px 24px;
            border-radius: 16px;
            box-shadow: 0 4px 18px rgba(44, 62, 80, 0.13);
            border: 2px solid #b2ebf2;
        }

        form div {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #1976d2;
            letter-spacing: 1px;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px 10px;
            border: 1.5px solid #26c6da;
            border-radius: 8px;
            font-size: 1em;
            background: #fafafa;
            box-sizing: border-box;
            transition: border-color 0.2s;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        textarea:focus {
            border-color: #1976d2;
            outline: none;
        }

        textarea {
            min-height: 60px;
            resize: vertical;
        }

        input[type="file"] {
            border: none;
            background: none;
            font-size: 1em;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background: linear-gradient(90deg, #26c6da 60%, #1976d2 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 2px 8px #b2ebf2;
            transition: background 0.2s, box-shadow 0.2s;
        }

        button[type="submit"]:hover {
            background: linear-gradient(90deg, #1976d2 60%, #26c6da 100%);
            box-shadow: 0 4px 16px #26c6da;
        }
    </style>
</head>

<body>
    <div class="barra-superior">
        <span class="logo">Ecommerce</span>
        <nav>
            <a href="#" class="nav-link">Inicio</a>
            <a href="#" class="nav-link">Productos</a>
            <a href="#" class="nav-link">Contacto</a>
        </nav>
    </div>
    <h1>FORMULARIO DE PRODUCTOS</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" required>
        </div>
        <div>
            <label for="imagen">Imagen:</label>
            <input type="file" id="imagen" name="imagen" accept="image/*">
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>
