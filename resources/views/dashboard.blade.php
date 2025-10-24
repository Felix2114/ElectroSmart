@extends('layouts.base')

@section('titulo', 'Dashboard')

@section('contenido')
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h2 class="h5 mb-0">{{ __('Dashboard') }}</h2>
        </div>
        <div class="card-body">
            <p>{{ __("You're logged in!") }}</p>
        </div>
    </div>
@endsection 