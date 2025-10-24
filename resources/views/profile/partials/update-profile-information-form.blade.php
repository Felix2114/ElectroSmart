<section class="perfil-section mb-4">
    <header class="mb-4">
        <h4 class="fw-semibold text-primary mb-1">
            <i class="bi bi-person-lines-fill"></i> Información del Perfil
        </h4>
        <p class="text-muted small">
            Actualiza los datos de tu cuenta y dirección de correo electrónico.
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="perfil-form">
        @csrf
        @method('patch')

        {{-- Nombre --}}
        <div class="mb-3">
            <label for="name" class="form-label fw-medium">Nombre</label>
            <input id="name" name="name" type="text" class="form-control" 
                value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            @error('name')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label fw-medium">Correo Electrónico</label>
            <input id="email" name="email" type="email" class="form-control"
                value="{{ old('email', $user->email) }}" required autocomplete="username">
            @error('email')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="text-muted small">
                        Tu correo electrónico no está verificado.
                        <button form="send-verification" class="btn btn-link p-0 align-baseline text-decoration-underline text-primary fw-medium">
                            Reenviar verificación
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="text-success small mb-0">
                            Se ha enviado un nuevo enlace de verificación a tu correo electrónico.
                        </p>
                    @endif
                </div>
            @endif
        </div>

        {{-- Botones --}}
        <div class="d-flex align-items-center gap-3 mt-4">
            <button type="submit" class="btn btn-primary px-4">
                <i class="bi bi-save-fill"></i> Guardar
            </button>

            @if (session('status') === 'profile-updated')
                <p class="text-success small mb-0 fade-in">Guardado.</p>
            @endif
        </div>
    </form>
</section>
