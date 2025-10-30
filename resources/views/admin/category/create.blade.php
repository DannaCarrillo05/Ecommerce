@extends('admin.layouts.app')

@section('content')
    <h1>Crear Nueva Categoría</h1>
    <div class="card">
        <div class="card-body">

            <form action="{{ route('admin.category.store') }}" method="POST">
                @csrf
                <div class="input-group input-group-outline mb-4">
                    <label for="name"></label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Ingrese el nombre de la categoría">
                </div>

                <input type="submit" class="btn bg-gradient-success" value="Crear Categoría">
            </form>
        </div>
    </div>
@endsection
