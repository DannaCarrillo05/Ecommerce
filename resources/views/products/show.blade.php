@extends('layouts.app')

{{-- styles moved to public/css/style.css --}}

@section('content')
    <div class="producto-detalle">
        <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80"
            alt="Nombre del Producto">
        <div class="producto-nombre">Nombre del Producto</div>
        <div class="producto-precio">$150.00</div>
        <div class="producto-descripcion">Esta es la descripción del producto. Aquí puedes agregar detalles,
            características y cualquier información relevante sobre el producto.</div>
    </div>
@endsection
