document.addEventListener('DOMContentLoaded', function () {
  // Detectar elementos html
  const productosTable = document.getElementById('productos-table');
  const ticketTable = document.getElementById('ticket-table');
  const ticketForm = document.getElementById('ticket-form');
  const totalText = document.querySelector('.texto-total');

  // Función para calcular subtotal y total
  function calcularTotal() {
      let subtotal = 0;
      const filas = ticketTable.querySelectorAll('tbody tr');
      filas.forEach(function (fila) {
          const cantidad = parseFloat(fila.querySelector('.cantidad').value);
          const precio = parseFloat(fila.querySelector('[name="precio[]"]').value);
          const subtotalItem = cantidad * precio;
          subtotal += subtotalItem;
          fila.querySelector('.subtotal').textContent = subtotalItem.toFixed(2);
      });
      totalText.textContent = 'Total $' + subtotal.toFixed(2);
  }

  // Agregar función a boton add
  productosTable.addEventListener('click', function (event) {
      if (event.target.classList.contains('btn-agregar')) {
          const item_id = parseInt(event.target.getAttribute('data-id'));
          const item = event.target.getAttribute('data-item');
          const precio = parseFloat(event.target.getAttribute('data-precio'));
          const row = document.createElement('tr');
          row.innerHTML = `
              <td><input type="number" min="1" value="1" class="entrada-dato cantidad" name="cantidad[]" required></td>
              <td><input type="number" value="${item_id}" class="entrada-dato" name="item_id[]" required readonly></td>
              <td><input type="text" value="${item}" class="entrada-dato" name="item[]" required readonly></td>
              <td><input type="number" min="1" value="${precio}" class="entrada-dato" name="precio[]" required readonly></td>
              <td class="subtotal">${precio.toFixed(2)}</td>
              <td><button class="btn-delete">-</button></td>
          `;
          // Agregar item a cuadro-2
          ticketTable.querySelector('tbody').appendChild(row);
          calcularTotal();
      }
  });

  // Agregar función al boton delete
  ticketTable.addEventListener('click', function (event) {
      if (event.target.classList.contains('btn-delete')) {
          // Eliminar item de cuadro-2
          event.target.closest('tr').remove();
          calcularTotal();
      }
  });

  // Calcular subtotal al cambiar la cantidad
  ticketTable.addEventListener('change', function (event) {
      if (event.target.classList.contains('cantidad')) {
          calcularTotal();
      }
  });

  // Calcular total al cargar la página
  calcularTotal();

});
