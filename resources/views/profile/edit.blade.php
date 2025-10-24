@extends('layouts.base')

@section('titulo', 'Mi Perfil')

@vite(['resources/css/perfil.css'])

@section('contenido')
<div class="container py-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold text-primary"><i class="bi bi-person-circle"></i> Mi Perfil</h2>
        <p class="text-muted">Administra tu información personal, contraseña y preferencias de cuenta.</p>
        <hr class="w-25 mx-auto">
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8">

            {{-- Información del Usuario --}}
            <div class="card border-0 shadow-lg mb-4 rounded-4 hover-card">
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h5 class="mb-0"><i class="bi bi-person-lines-fill"></i> Información Personal</h5>
                </div>
                <div class="card-body p-4">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            {{-- Cambiar Contraseña --}}
            <div class="card border-0 shadow-lg mb-4 rounded-4 hover-card">
                <div class="card-header bg-warning text-dark rounded-top-4">
                    <h5 class="mb-0"><i class="bi bi-shield-lock-fill"></i> Seguridad y Contraseña</h5>
                </div>
                <div class="card-body p-4">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            {{-- Eliminar Cuenta --}}
            <div class="card border-0 shadow-lg rounded-4 hover-card">
                <div class="card-header bg-danger text-white rounded-top-4">
                    <h5 class="mb-0"><i class="bi bi-exclamation-triangle-fill"></i> Eliminar Cuenta</h5>
                </div>
                <div class="card-body p-4">
                    <p class="text-muted mb-3">Una vez que elimines tu cuenta, no podrás recuperar tu información.</p>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
