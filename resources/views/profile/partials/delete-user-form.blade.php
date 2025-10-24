<section class="perfil-section mb-4">
    <header class="mb-4">
        <h4 class="fw-semibold text-danger mb-1">
            <i class="bi bi-exclamation-triangle-fill"></i> Eliminar Cuenta
        </h4>
        <p class="text-muted small">
            Una vez que elimines tu cuenta, todos los recursos y datos se borrarán permanentemente. 
            Por favor, asegúrate de descargar cualquier información que quieras conservar antes de continuar.
        </p>
    </header>

    {{-- Botón para abrir modal --}}
    <button type="button" class="btn btn-danger px-4" data-bs-toggle="modal" data-bs-target="#deleteAccountModal">
        <i class="bi bi-trash-fill"></i> Eliminar Cuenta
    </button>

    {{-- Modal de confirmación --}}
    <div class="modal fade" id="deleteAccountModal" tabindex="-1" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 rounded-4 shadow-lg">
                <div class="modal-header bg-danger text-white rounded-top-4">
                    <h5 class="modal-title fw-semibold" id="deleteAccountModalLabel">
                        Confirmar Eliminación
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <form method="post" action="{{ route('profile.destroy') }}" class="modal-body p-4 perfil-form">
                    @csrf
                    @method('delete')

                    <p class="text-muted small mb-3">
                        Una vez que elimines tu cuenta, todos los recursos y datos se eliminarán permanentemente. 
                        Ingresa tu contraseña para confirmar la eliminación.
                    </p>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-medium">Contraseña</label>
                        <input id="password" name="password" type="password" class="form-control" placeholder="Contraseña">
                        @error('password')
                            <div class="text-danger small mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash-fill"></i> Eliminar Cuenta
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
