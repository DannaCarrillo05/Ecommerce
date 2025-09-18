@extends('layouts.app')

@section('css')
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

        .producto-detalle {
            max-width: 500px;
            margin: 60px auto 0 auto;
            background: linear-gradient(135deg, #fff 60%, #e0f7fa 100%);
            border-radius: 16px;
            box-shadow: 0 4px 18px rgba(44, 62, 80, 0.13);
            padding: 38px 28px 32px 28px;
            text-align: center;
            border: 2px solid #b2ebf2;
        }

        .producto-detalle img {
            width: 100%;
            max-width: 320px;
            height: 220px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 18px;
            box-shadow: 0 2px 8px #b2ebf2;
            border: 2px solid #26c6da;
        }

        .producto-nombre {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 10px;
            color: #1976d2;
            letter-spacing: 1px;
            text-shadow: 1px 1px 8px #b2d8b2;
        }

        .producto-precio {
            font-size: 1.2em;
            color: #26c6da;
            margin-bottom: 18px;
            font-weight: 600;
            text-shadow: 0 1px 6px #b2ebf2;
        }

        .producto-descripcion {
            font-size: 1em;
            color: #444;
            margin-bottom: 24px;
        }

        .volver-btn {
            display: inline-block;
            padding: 8px 20px;
            background: linear-gradient(90deg, #26c6da 60%, #1976d2 100%);
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            font-size: 1em;
            transition: background 0.2s;
            font-weight: 500;
            box-shadow: 0 2px 8px #b2ebf2;
            border: none;
        }

        .volver-btn:hover {
            background: linear-gradient(90deg, #1976d2 60%, #26c6da 100%);
            box-shadow: 0 4px 16px #26c6da;
        }
    </style>
@endsection

@section('content')

    <body>
        <div class="producto-detalle">
            <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80"
                alt="Nombre del Producto">
            <div class="producto-nombre">Nombre del Producto</div>
            <div class="producto-precio">$150.00</div>
            <div class="producto-descripcion">Esta es la descripción del producto. Aquí puedes agregar detalles,
                características y cualquier información relevante sobre el producto.</div>
        </div>
    </body>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>

</head>


</html>
