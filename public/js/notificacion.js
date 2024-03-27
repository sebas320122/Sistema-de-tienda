let botones_close = document.querySelectorAll('.btn-close');

botones_close.forEach(function (btn_close) {
    btn_close.addEventListener('click', function () {
        // Encuentra el elemento padre (.cuadro) del botón actual
        let notif = btn_close.closest('.notificacion');
        notif.classList.toggle('close');
    });
});