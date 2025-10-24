document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.product-card').forEach(card => {
        card.addEventListener('click', () => {
            document.getElementById('modal-nombre').textContent = card.dataset.nombre;
            document.getElementById('modal-categoria').textContent = 'Categoría: ' + card.dataset.categoria;
            document.getElementById('modal-desc').textContent = card.dataset.desc;
            document.getElementById('modal-precio').textContent = card.dataset.precio;
            document.getElementById('modal-img').src = card.dataset.img;
        });
    });
});
