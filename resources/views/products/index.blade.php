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

        .titulo-productos {
            text-align: center;
            margin-top: 40px;
            color: #1976d2;
            letter-spacing: 2px;
            font-size: 2.2em;
            text-shadow: 1px 1px 8px #b2d8b2;
        }

        .productos-lista {
            display: flex;
            gap: 36px;
            justify-content: center;
            margin-top: 50px;
            flex-wrap: wrap;
        }

        .producto {
            width: 210px;
            border-radius: 16px;
            background: linear-gradient(135deg, #fff 60%, #e0f7fa 100%);
            box-shadow: 0 4px 18px rgba(44, 62, 80, 0.13);
            padding: 22px 18px 18px 18px;
            text-align: center;
            position: relative;
            transition: transform 0.2s, box-shadow 0.2s;
            border: 2px solid #b2ebf2;
        }

        .producto:hover {
            transform: translateY(-8px) scale(1.04);
            box-shadow: 0 8px 32px rgba(44, 62, 80, 0.18);
            border-color: #26c6da;
        }

        .producto img {
            width: 100%;
            height: 130px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 14px;
            box-shadow: 0 2px 8px #b2ebf2;
            border: 2px solid #26c6da;
        }

        .producto-nombre {
            font-size: 1.15em;
            font-weight: bold;
            margin-bottom: 8px;
            color: #1976d2;
            letter-spacing: 1px;
        }

        .producto-precio {
            color: #26c6da;
            font-size: 1.08em;
            font-weight: 600;
            margin-bottom: 10px;
            text-shadow: 0 1px 6px #b2ebf2;
        }

        .ver-detalle-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 7px 20px;
            background: linear-gradient(90deg, #26c6da 60%, #1976d2 100%);
            color: #fff;
            border-radius: 6px;
            text-decoration: none;
            font-size: 1em;
            font-weight: 500;
            box-shadow: 0 2px 8px #b2ebf2;
            border: none;
            transition: background 0.2s, box-shadow 0.2s;
        }

        .ver-detalle-btn:hover {
            background: linear-gradient(90deg, #1976d2 60%, #26c6da 100%);
            box-shadow: 0 4px 16px #26c6da;
        }
    </style>
@endsection

@section('content')

    <body>
        
        <h1 class="titulo-productos">Productos</h1>
        <div class="productos-lista">
            <div class="producto">
                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80"
                    alt="Producto 1">
                <div class="producto-nombre">Producto 1</div>
                <div class="producto-precio">$100.00</div>

            </div>
            <div class="producto">
                <img src="https://images.unsplash.com/photo-1519985176271-adb1088fa94c?auto=format&fit=crop&w=400&q=80"
                    alt="Producto 2">
                <div class="producto-nombre">Producto 2</div>
                <div class="producto-precio">$150.00</div>

            </div>
            <div class="producto">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=400&q=80"
                    alt="Producto 3">
                <div class="producto-nombre">Producto 3</div>
                <div class="producto-precio">$200.00</div>

            </div>
            <div class="producto">
                <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=400&q=80"
                    alt="Producto 4">
                <div class="producto-nombre">Producto 4</div>
                <div class="producto-precio">$250.00</div>

            </div>
            <div class="producto">
                <img src="https://images.unsplash.com/photo-1519985176271-adb1088fa94c?auto=format&fit=crop&w=400&q=80"
                    alt="Producto 5">
                <div class="producto-nombre">Producto 5</div>
                <div class="producto-precio">$300.00</div>

            </div>
        </div>
    </body>
@endsection


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
</head>



</html>
