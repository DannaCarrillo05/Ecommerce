@extends('layouts.app')
{{-- styles moved to public/css/style.css --}}

@section('content')
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
@endsection
