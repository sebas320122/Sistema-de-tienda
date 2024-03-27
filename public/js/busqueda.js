document.addEventListener('DOMContentLoaded', function () {
    var filtroItemsInput = document.getElementById('filtro-items');
    var tablaMenu = document.getElementById('productos-table');

    filtroItemsInput.addEventListener('input', function () {
        var searchText = filtroItemsInput.value.toLowerCase();

        // Obtener todas las filas de la tabla
        var filas = tablaMenu.getElementsByTagName('tr');

        for (var i = 0; i < filas.length; i++) {
            var fila = filas[i];
            
            // Omitir la primera fila que contiene los encabezados (thead)
            if (i === 0) continue;

            var itemCell = fila.cells[0];
            var precioCell = fila.cells[1];

            var itemText = itemCell.textContent.toLowerCase();
            var precioText = precioCell.textContent.toLowerCase();

            if (itemText.indexOf(searchText) === -1 && precioText.indexOf(searchText) === -1) {
                fila.style.display = 'none'; // Ocultar la fila que no coincide con la búsqueda
            } else {
                fila.style.display = ''; // Mostrar la fila que coincide con la búsqueda
            }
        }
    });
});