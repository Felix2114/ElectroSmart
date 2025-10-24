@extends('layouts.base')

@section('titulo', 'Inicio')

@section('contenido')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
@vite(['resources/css/buscar.css', 'resources/js/buscar.js'])

<div class="container mt-4">

   
 
<div class="position-relative overflow-hidden mb-5 rounded shadow-lg" style="background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%); color:white;">
    <div class="container py-5 text-center position-relative" style="z-index:2;">
        <h1 class="display-3 fw-bold mb-3">ElectroSmart</h1>
        <p class="lead mb-4">La mejor tecnología a tu alcance</p>
        <a href="{{ route('buscar') }}" class="btn btn-light btn-lg shadow-sm">
            <i class="bi bi-search"></i> Explora productos
        </a>
    </div>

  
    <div class="position-absolute w-100 h-100" style="top:0; left:0; overflow:hidden; z-index:0;">
        <span class="bubble" style="top:10%; left:5%; width:40px; height:40px;"></span>
        <span class="bubble" style="top:30%; left:80%; width:60px; height:60px;"></span>
        <span class="bubble" style="top:70%; left:50%; width:30px; height:30px;"></span>
    </div>
</div>

   
    <h2 class="mb-3 text-primary"><i class="bi bi-grid-3x3-gap-fill"></i> Explora por Categorías</h2>
<div class="row g-3 mb-5">
    @foreach (['Teléfonos', 'Computadoras', 'Audio', 'Accesorios', 'Tablets', 'Monitores', 'Fotografía', 'Videojuegos'] as $categoria)
    <div class="col-6 col-md-3">
        <div class="card category-card text-center p-4 shadow-sm" style="cursor:pointer;">
            <i class="bi bi-box-seam fs-1 text-primary mb-2"></i>
            <h6 class="mb-0">{{ $categoria }}</h6>
        </div>
    </div>
    @endforeach
</div>


   
    <h2 class="mb-3 text-primary"><i class="bi bi-star-fill"></i> Productos Destacados</h2>
    <div class="row g-4 mb-5">
        @foreach ([
            ['nombre' => 'Smartphone Galaxy 2131312', 'categoria' => 'Teléfonos', 'desc' => 'Pantalla AMOLED de 6.5", cámara de 108MP y batería de larga duración.', 'precio' => '$9,999.00 MXN', 'img' => 'https://ejemplo.com'],
            ['nombre' => 'Laptop UltraPro 1213215', 'categoria' => 'Computadoras', 'desc' => 'Procesador Intel i7, 16GB RAM y SSD de 512GB.', 'precio' => '$18,499.00 MXN', 'img' => 'https://ejemplo.com'],
            ['nombre' => 'Smartwatch NeoFit Pro', 'categoria' => 'Accesorios', 'desc' => 'Pantalla táctil, monitoreo de ritmo cardíaco y resistencia al agua.', 'precio' => '$3,299.00 MXN', 'img' => 'https://ejemplo.com'],
            ['nombre' => 'Audífonos SoundMax', 'categoria' => 'Audio', 'desc' => 'Sonido envolvente y cancelación de ruido activa.', 'precio' => '$2,499.00 MXN', 'img' => 'https://ejemplo.com'],
        ] as $p)
        <div class="col-md-3 col-6">
            <div class="card product-card" 
                 data-bs-toggle="modal" 
                 data-bs-target="#productoModal"
                 data-nombre="{{ $p['nombre'] }}"
                 data-categoria="{{ $p['categoria'] }}"
                 data-desc="{{ $p['desc'] }}"
                 data-precio="{{ $p['precio'] }}"
                 data-img="{{ $p['img'] }}">
                <img src="{{ $p['img'] }}" class="card-img-top product-img" alt="{{ $p['nombre'] }}">
                <div class="card-body">
                    <h6 class="card-title">{{ $p['nombre'] }}</h6>
                    <p class="card-text text-muted mb-1">{{ $p['categoria'] }}</p>
                    <p class="price">{{ $p['precio'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

  
    <h2 class="mb-3 text-danger"><i class="bi bi-bolt-fill"></i> Ofertas del día</h2>
    <div class="row g-4 mb-5">
        @foreach ([
            ['nombre' => 'Tablet VisionTab X10', 'categoria' => 'Tablets', 'desc' => 'Pantalla de 10.1", 8GB RAM y almacenamiento de 256GB.', 'precio' => '$7,999.00 MXN', 'img' => 'https://ejemplo.com'],
            ['nombre' => 'Monitor UltraView 27"', 'categoria' => 'Monitores', 'desc' => 'Resolución 4K UHD con tasa de refresco de 144Hz.', 'precio' => '$6,499.00 MXN', 'img' => 'https://ejemplo.com'],
        ] as $p)
        <div class="col-md-3 col-6">
            <div class="card product-card border-danger" 
                 data-bs-toggle="modal" 
                 data-bs-target="#productoModal"
                 data-nombre="{{ $p['nombre'] }}"
                 data-categoria="{{ $p['categoria'] }}"
                 data-desc="{{ $p['desc'] }}"
                 data-precio="{{ $p['precio'] }}"
                 data-img="{{ $p['img'] }}">
                <img src="{{ $p['img'] }}" class="card-img-top product-img" alt="{{ $p['nombre'] }}">
                <div class="card-body">
                    <h6 class="card-title">{{ $p['nombre'] }}</h6>
                    <p class="card-text text-muted mb-1">{{ $p['categoria'] }}</p>
                    <p class="price">{{ $p['precio'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

   
    <h2 class="mb-3 text-success"><i class="bi bi-megaphone-fill"></i> Promociones</h2>
    <div id="promoCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ([
                'https://ejemplo.com/promo1.jpg',
                'https://ejemplo.com/promo2.jpg',
                'https://ejemplo.com/promo3.jpg'
            ] as $i => $img)
            <div class="carousel-item @if($i==0) active @endif">
                <img src="{{ $img }}" class="d-block w-100 rounded" alt="Promo {{ $i+1 }}">
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#promoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#promoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

</div>


<div class="modal fade" id="productoModal" tabindex="-1" aria-labelledby="productoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productoModalLabel">Detalle del Producto</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modal-img" src="" alt="" class="img-fluid rounded mb-3" style="max-height: 200px;">
                <h5 id="modal-nombre"></h5>
                <p class="text-muted" id="modal-categoria"></p>
                <p id="modal-desc"></p>
                <p class="price fs-5" id="modal-precio"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    <i class="bi bi-x-circle"></i> Cerrar
                </button>
                <button type="button" class="btn btn-success">
                    <i class="bi bi-cart-plus"></i> Agregar al carrito
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
