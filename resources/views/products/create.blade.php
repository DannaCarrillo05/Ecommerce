@extends('layouts.app')

{{-- styles moved to public/css/style.css --}}

@section('content')
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
@endsection
