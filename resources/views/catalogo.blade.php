@extends('layouts.base')

@section('titulo', 'Categorías - ElectroSmart')

@section('contenido')
<div class="container mt-5">
    <h1 class="text-center mb-4">Categorías</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">

        {{-- Categoría 1 --}}
        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/categorias/electronica.jpg') }}" class="img-categoria" alt="Electrónica">
                <div class="card-body">
                    <h5 class="card-title">Electrónica</h5>
                    <p class="card-text">Explora nuestros dispositivos más modernos y eficientes.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary w-100">Ver productos</a>
                </div>
            </div>
        </div>

        {{-- Categoría 2 --}}
        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/categorias/hogar.jpeg') }}" class="img-categoria" alt="Hogar">
                <div class="card-body">
                    <h5 class="card-title">Hogar</h5>
                    <p class="card-text">Equipos y accesorios para tu casa inteligente.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary w-100">Ver productos</a>
                </div>
            </div>
        </div>

        {{-- Categoría 3 --}}
        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/categorias/accesorios.jpg') }}" class="img-categoria" alt="Accesorios">
                <div class="card-body">
                    <h5 class="card-title">Accesorios</h5>
                    <p class="card-text">Encuentra todo tipo de cables, fundas y gadgets.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary w-100">Ver productos</a>
                </div>
            </div>
        </div>

        {{-- Categoría 4 --}}
        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/categorias/computadora.jpg') }}" class="img-categoria" alt="Computadoras">
                <div class="card-body">
                    <h5 class="card-title">Computadoras</h5>
                    <p class="card-text">Laptops, desktops y componentes de alto rendimiento.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary w-100">Ver productos</a>
                </div>
            </div>
        </div>

        {{-- Categoría 5 --}}
        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/categorias/video.jpg') }}" class="img-categoria" alt="Audio y Video">
                <div class="card-body">
                    <h5 class="card-title">Audio y Video</h5>
                    <p class="card-text">Bocinas, auriculares, televisores y proyectores con gran calidad.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary w-100">Ver productos</a>
                </div>
            </div>
        </div>

        {{-- Categoría 6 --}}
        <div class="col">
            <div class="card h-100 text-center shadow-sm">
                <img src="{{ asset('images/categorias/gaming.jpg') }}" class="img-categoria" alt="Gaming">
                <div class="card-body">
                    <h5 class="card-title">Gaming</h5>
                    <p class="card-text">Consolas, accesorios y componentes para gamers.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary w-100">Ver productos</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
