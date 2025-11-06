@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>LISTA DE PRODUCTOS</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">ID</th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Nombre
                        </th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Precio
                        </th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                            Categoría</th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Marca
                        </th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Created
                        </th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Updated
                        </th>
                        <th class = "text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">
                            Acciones
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class = "text-center">{{ $product->id }}</td>
                            <td class = "text-center">{{ $product->name }}</td>
                            <td class = "text-center">{{ $product->price }}</td>
                            <td class = "text-center">{{ $product->category_id }}</td>
                            <td class = "text-center">{{ $product->brand_id }}</td>
                            <td class = "text-center">{{ $product->created_at }}</td>
                            <td class = "text-center">{{ $product->updated_at }}</td>
                            <td class = "text-center">
                                <a href="#" class="btn btn-info btn-sm">Eliminar</a>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
