@extends('layouts.base')

@section('titulo', 'Contacto - ElectroSmart')

@section('contenido')
<div class="container mt-5">
    <h1 class="text-center mb-4">Contáctanos</h1>

    <form method="POST" action="#">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre completo</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico</label>
            <input type="email" name="correo" id="correo" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea name="mensaje" id="mensaje" rows="4" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">Enviar</button>
    </form>
</div>
@endsection
