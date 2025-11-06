@extends('admin.layouts.app')

@section('content')
    <h1>FORMULARIO DE PRODUCTOS</h1>
    <div class="card">
        <div class="card-body">

            <form action="" method="POST" enctype="multipart/form-data">


                <div class="input-group input-group-outline mb-3">
                    <label for="nombre"></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto"
                        required>
                </div>

                <div class="input-group input-group-outline mb-3">
                    <label for="descripcion"></label>
                    <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Descripción" required></textarea>
                </div>

                <div class="input-group input-group-outline mb-3">
                    <label for="precio"></label>
                    <input type="number" class="form-control" id="precio" name="precio" step="0.01"
                        placeholder="Precio" required>
                </div>

                <div class="input-group input-group-outline mb-3">
                    <select id="productCategory" class="form-control">
                        <option value="" selected disabled>-- Seleccione una categoría --</option>
                        @foreach($categories as $item)
                            <option value="{{ $item->id }}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group input-group-outline mb-3">
                    <select id="productBrand" class="form-control">
                        <option value="" selected disabled>-- Seleccione una marca --</option>
                        @foreach($brands as $item)
                            <option value="{{ $item->id }}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group input-group-outline mb-3">
                    <label for="imagen"></label>
                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
                </div>

                

                <input type="submit" class="btn bg-gradient-success" value="Guardar Producto">
            </form>
        </div>
    </div>
@endsection
