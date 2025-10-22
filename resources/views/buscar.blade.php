@extends('layouts.base')

@section('titulo', 'Buscar')

@section('contenido')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Busca aquí tu producto electrónico" aria-label="Buscar producto">
  <button class="input-group-text" id="basic-addon2">
    <i class="bi bi-search"></i>
  </button>
</div>

<hr>

<h2>Productos disponibles</h2>

<div class="list-group mt-3 mb-3">
    <div class="list-group-item">
        <div class="d-flex align-items-start">
            <div class="me-3" style="width:80px; height:80px; background-color:#f0f0f0;"></div>
            <div>
                <h5 class="mb-1">Smartphone Galaxy 2131312</h5>
                <small class="text-muted">Categoría: Teléfonos</small>
                <p class="mb-1">Pantalla AMOLED de 6.5", cámara de 108MP y batería de larga duración.</p>
                <strong>$9,999.00 MXN</strong>
            </div>
        </div>
    </div>

    <div class="list-group-item">
        <div class="d-flex align-items-start">
            <div class="me-3" style="width:80px; height:80px; background-color:#f0f0f0;"></div>
            <div>
                <h5 class="mb-1">Laptop UltraPro 1213215</h5>
                <small class="text-muted">Categoría: Computadoras</small>
                <p class="mb-1">Procesador Intel i7, 16GB RAM y SSD de 512GB.</p>
                <strong>$18,499.00 MXN</strong>
            </div>
        </div>
    </div>

    <div class="list-group-item">
        <div class="d-flex align-items-start">
            <div class="me-3" style="width:80px; height:80px; background-color:#f0f0f0;"></div>
            <div>
                <h5 class="mb-1">Audífonos SoundMax</h5>
                <small class="text-muted">Categoría: Audio</small>
                <p class="mb-1">Sonido envolvente y cancelación de ruido activa.</p>
                <strong>$2,499.00 MXN</strong>
            </div>
        </div>
    </div>
</div>
@endsection
