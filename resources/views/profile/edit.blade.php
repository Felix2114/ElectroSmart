@extends('layouts.base')

@section('titulo', 'Perfil')

@section('contenido')
    <h2 class="mb-4">{{ __('Profile') }}</h2>

    <div class="row">
        <div class="col-md-10 mx-auto space-y-4">
            
            {{-- Formulario de Información de Perfil --}}
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            {{-- Formulario de Actualizar Contraseña --}}
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            {{-- Formulario de Eliminar Cuenta --}}
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection