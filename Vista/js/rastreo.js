document.getElementById('trackingForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const trackingNumber = document.getElementById('trackingNumber').value;
    let status;

    // Simulación de estado basado en el número de seguimiento
    if (trackingNumber === "123") {
        status = "En Bodega";
    } else if (trackingNumber === "456") {
        status = "En Tránsito";
    } else if (trackingNumber === "789") {
        status = "Entregado";
    } else {
        status = "Número de seguimiento no encontrado.";
    }

    // Mostrar el resultado
    const resultDiv = document.getElementById('result');
    resultDiv.style.display = 'block';
    resultDiv.textContent = `Estado del paquete: ${status}`;
});