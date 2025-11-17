@extends('layouts.app')
{{-- styles moved to public/css/style.css --}}

@section('content')
    <h1 class="titulo-productos">Productos</h1>
    
    <!-- Filtros -->
    <div class="filtros-container">
        <form method="GET" action="{{ route('products.index') }}" class="filtros-form">
            <div class="filtro-group">
                <label for="category" class="filtro-label">Filtrar por Categoría:</label>
                <select name="category" id="category" class="filtro-select">
                    <option value="">Todas las categorías</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $selectedCategory == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="filtro-group">
                <label for="brand" class="filtro-label">Filtrar por Marca:</label>
                <select name="brand" id="brand" class="filtro-select">
                    <option value="">Todas las marcas</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}" {{ $selectedBrand == $brand->id ? 'selected' : '' }}>
                            {{ $brand->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="filtro-group">
                <button type="submit" class="filtro-btn">Filtrar</button>
                @if($selectedCategory || $selectedBrand)
                    <a href="{{ route('products.index') }}" class="filtro-btn-limpiar">Limpiar Filtros</a>
                @endif
            </div>
        </form>
    </div>
    
    @if($products->count() > 0)
        <div class="productos-lista">
            @foreach($products as $product)
                <div class="producto">
                    <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=400&q=80"
                        alt="{{ $product->name }}">
                    <div class="producto-nombre">{{ $product->name }}</div>
                    <div class="producto-precio">${{ number_format($product->price, 2, '.', ',') }}</div>
                    @if($product->category)
                        <div class="producto-categoria">Categoría: {{ $product->category->name }}</div>
                    @endif
                    @if($product->brand)
                        <div class="producto-marca">Marca: {{ $product->brand->name }}</div>
                    @endif
                    @if($product->description)
                        <div class="producto-descripcion-corta">{{ Str::limit($product->description, 60) }}</div>
                    @endif
                    <a href="{{ route('products.show', $product->id) }}" class="ver-detalle-btn">Ver Detalle</a>
                </div>
            @endforeach
        </div>
        
        <div class="pagination-container">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    @else
        <div class="no-products">
            <p>No hay productos disponibles en este momento.</p>
        </div>
    @endif
@endsection
