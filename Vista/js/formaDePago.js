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

document.getElementById('detailsForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar que el formulario recargue la página
    
    // Validar el formulario (puedes agregar más validaciones según necesites)
    const nombreCompleto = document.getElementById('nombreCompleto').value;
    const telefono = document.getElementById('telefono').value;
    const direccion = document.getElementById('direccion').value;
    const departamento = document.getElementById('departamento').value;

    if (nombreCompleto && telefono && direccion && departamento) {
        // Si el formulario es válido, oculta el primer formulario y muestra el segundo
        document.getElementById('detailsForm').classList.add('hidden');
        document.getElementById('paymentFormContainer').classList.remove('hidden');
    } else {
        alert('Por favor, completa todos los campos obligatorios.');
    }
});

