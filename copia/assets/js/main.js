const btnswitch = document.querySelector('#switch');

btnswitch.addEventListener('click', () => {
    document.body.classList.toggle('dark');
    btnswitch.classList.toggle('active');
});

window.onload = function() {
    var contenedor = document.getElementById('contenedor_carga');
    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';
}
