@extends('admin.layouts.app')

@section('content')
    <h1>FORMULARIO DE PRODUCTOS</h1>
    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.products.store') }}" method="POST">
                @csrf

                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group input-group-outline mb-3">
                    <label for="name"></label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del producto"
                        value="{{ old('name') }}">
                </div>

                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <div class="input-group input-group-outline mb-3">
                    <label for="description"></label>
                    <input class="form-control" id="description" name="description" placeholder="Descripción"
                        value="{{ old('description') }}">
                </div>
                @error('price')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <div class="input-group input-group-outline mb-3">
                    <label for="price"></label>
                    <input type="number" class="form-control" id="price" name="price" step="0.01"
                        placeholder="Precio" value="{{ old('price') }}">
                </div>
                @error('category')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <div class="input-group input-group-outline mb-3">
                    <select id="productCategory" class="form-control" name ="category">
                        <option value="" selected disabled>-- Seleccione una categoría --</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('brand')
                    <small class="text-danger">{{ $message }}</small>
                @enderror

                <div class="input-group input-group-outline mb-3">
                    <select id="productBrand" class="form-control" name="brand">
                        <option value="" selected disabled>-- Seleccione una marca --</option>
                        @foreach ($brands as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
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
