@extends('layouts.base')

@section('titulo', 'Perfil')

@section('contenido')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<div class="text-center mb-4">
    
    <i class="bi bi-person-circle" style="font-size: 6rem; color: #0d6efd;"></i>
</div>
<script src="{{ Vite::asset('resources/js/perfil.js') }}"></script>
  <div class="card shadow-sm mb-5">
    <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Perfil de Usuario</h5>
       
    </div>
    <div class="card-body">
        <form id="perfilForm">
        
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <span class="form-control-plaintext" id="nombreText">Andryk Giovany</span>
                <input type="text" class="form-control d-none" id="nombreInput" value="Andryk Giovany">
            </div>

           
            <div class="mb-3">
                <label class="form-label">Correo</label>
                <span class="form-control-plaintext" id="correoText">andryk@gmail.com</span>
                <input type="email" class="form-control d-none" id="correoInput" value="ejemplo@correo.com">
            </div>

          
            <div class="mb-3">
                <label class="form-label">Contraseña</label>
                <span class="form-control-plaintext" id="contraseñaText">********</span>
                <input type="password" class="form-control d-none" id="contraseñaInput" value="12345678">
            </div>

          
            <div class="mb-3">
                <label class="form-label">Dirección</label>
                <span class="form-control-plaintext" id="direccionText">Calle 13</span>
                <input type="text" class="form-control d-none" id="direccionInput" value="Calle Falsa 123">
            </div>

         
            <div class="mb-3">
                <label class="form-label">Teléfono</label>
                <span class="form-control-plaintext" id="telefonoText">+52 123 456 7890</span>
                <input type="tel" class="form-control d-none" id="telefonoInput" value="+52 123 456 7890">
            </div>

             <button type="button"  id="editarBtn" class="btn btn-primary">Editar</button>
            <button type="submit" class="btn btn-primary d-none" id="guardarBtn">Guardar</button>
        </form>
    </div>
@endsection
