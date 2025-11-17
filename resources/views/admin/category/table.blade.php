@extends('admin.layouts.app')

@section('content')
    <style>
        .pagination {
            --bs-pagination-color: #e91e63;
            --bs-pagination-hover-color: #e91e63;
            --bs-pagination-focus-color: #e91e63;
            --bs-pagination-active-bg: #e91e63;
            --bs-pagination-active-border-color: #e91e63;
        }
        
        .pagination .page-item .page-link,
        .pagination .page-item span {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #737373;
            padding: 0;
            margin: 0 3px;
            border-radius: 50% !important;
            width: 36px;
            height: 36px;
            font-size: 0.875rem;
            border: 1px solid #d4d4d4;
        }
        
        .pagination .page-item.active .page-link {
            background-image: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);
            border: none;
            color: #fff;
        }
        
        .pagination .page-item .page-link:hover {
            background-color: #e5e5e5;
            border-color: #d4d4d4;
        }
        
        .pagination .page-item.disabled .page-link {
            color: #525252;
            background-color: #fff;
            border-color: #d4d4d4;
            opacity: 0.6;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <h1>LISTA DE CATEGORÍAS</h1>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <a href="{{ route('admin.category.create') }}" class="btn btn-primary">Crear Categoría</a>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">ID</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Nombre</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Created</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Updated</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td class="text-center">{{ $category->id }}</td>
                            <td class="text-center">{{ $category->name }}</td>
                            <td class="text-center">{{ $category->created_at }}</td>
                            <td class="text-center">{{ $category->updated_at }}</td>
                            <td class="text-center">
                                <form action="{{ route('admin.category.destroy', $category->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('¿Estás seguro de que deseas eliminar esta categoría?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-4">
                {{ $categories->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection

