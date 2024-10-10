const paymentTypeSelect = document.getElementById('paymentType');
const cuotasDiv = document.getElementById('cuotasDiv');
const contraEntregaDiv = document.getElementById('contraEntregaDiv');
const tiendaDiv = document.getElementById('tiendaDiv');

// Mostrar u ocultar campos según el tipo de pago
paymentTypeSelect.addEventListener('change', function() {
    const paymentType = this.value;

    // Ocultar todos los campos
    cuotasDiv.classList.add('hidden');
    contraEntregaDiv.classList.add('hidden');
    tiendaDiv.classList.add('hidden');

    if (paymentType === 'credito') {
        cuotasDiv.classList.remove('hidden');
    } else if (paymentType === 'contraEntrega') {
        contraEntregaDiv.classList.remove('hidden');
    } else if (paymentType === 'tienda') {
        tiendaDiv.classList.remove('hidden');
    }
});
