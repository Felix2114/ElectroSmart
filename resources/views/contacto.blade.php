@extends('layouts.base')

@section('titulo', 'Contacto - ElectroSmart')

@vite(['resources/css/perfil.css'])

@section('contenido')
<div class="container perfil-section py-5">
    <h1 class="text-center mb-5 fw-bold text-primary">
        <i class="bi bi-envelope-fill"></i> Contáctanos
    </h1>

    <form method="POST" action="#" class="perfil-form mx-auto" style="max-width: 600px;">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label fw-medium">Nombre completo</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label fw-medium">Correo electrónico</label>
            <input type="email" name="correo" id="correo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="mensaje" class="form-label fw-medium">Mensaje</label>
            <textarea name="mensaje" id="mensaje" rows="5" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100 px-4 py-2">
            <i class="bi bi-send-fill"></i> Enviar
        </button>
    </form>
</div>
@endsection
