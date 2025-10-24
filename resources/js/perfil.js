document.addEventListener('DOMContentLoaded', function() {
    const editarBtn = document.getElementById('editarBtn');
    const guardarBtn = document.getElementById('guardarBtn');

    editarBtn.addEventListener('click', () => {
        ['nombre','correo','contraseña','direccion','telefono'].forEach(id => {
            const text = document.getElementById(id + 'Text');
            const input = document.getElementById(id + 'Input');
            input.value = text.textContent;
            text.classList.add('d-none');
            input.classList.remove('d-none');
        });
        editarBtn.classList.add('d-none');
        guardarBtn.classList.remove('d-none');
    });

    document.getElementById('perfilForm').addEventListener('submit', (e) => {
        e.preventDefault();
        ['nombre','correo','contraseña','direccion','telefono'].forEach(id => {
            const text = document.getElementById(id + 'Text');
            const input = document.getElementById(id + 'Input');
            text.textContent = input.value;
            input.classList.add('d-none');
            text.classList.remove('d-none');
        });
        guardarBtn.classList.add('d-none');
        editarBtn.classList.remove('d-none');
    });
});