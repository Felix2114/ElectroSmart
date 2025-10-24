<section class="perfil-section mb-4">
    <header class="mb-4">
        <h4 class="fw-semibold text-warning mb-1">
            <i class="bi bi-shield-lock-fill"></i> Actualizar Contraseña
        </h4>
        <p class="text-muted small">
            Asegúrate de usar una contraseña larga y segura para proteger tu cuenta.
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="perfil-form">
        @csrf
        @method('put')

        {{-- Contraseña actual --}}
        <div class="mb-3">
            <label for="update_password_current_password" class="form-label fw-medium">Contraseña Actual</label>
            <input id="update_password_current_password" name="current_password" type="password"
                class="form-control" autocomplete="current-password">
            @if ($errors->updatePassword->get('current_password'))
                <div class="text-danger small mt-1">
                    {{ $errors->updatePassword->first('current_password') }}
                </div>
            @endif
        </div>

        {{-- Nueva contraseña --}}
        <div class="mb-3">
            <label for="update_password_password" class="form-label fw-medium">Nueva Contraseña</label>
            <input id="update_password_password" name="password" type="password"
                class="form-control" autocomplete="new-password">
            @if ($errors->updatePassword->get('password'))
                <div class="text-danger small mt-1">
                    {{ $errors->updatePassword->first('password') }}
                </div>
            @endif
        </div>

        {{-- Confirmar contraseña --}}
        <div class="mb-3">
            <label for="update_password_password_confirmation" class="form-label fw-medium">Confirmar Contraseña</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password"
                class="form-control" autocomplete="new-password">
            @if ($errors->updatePassword->get('password_confirmation'))
                <div class="text-danger small mt-1">
                    {{ $errors->updatePassword->first('password_confirmation') }}
                </div>
            @endif
        </div>

        {{-- Botones --}}
        <div class="d-flex align-items-center gap-3 mt-4">
            <button type="submit" class="btn btn-warning text-dark px-4">
                <i class="bi bi-save-fill"></i> Guardar
            </button>

            @if (session('status') === 'password-updated')
                <p class="text-success small mb-0 fade-in">Guardado.</p>
            @endif
        </div>
    </form>
</section>
