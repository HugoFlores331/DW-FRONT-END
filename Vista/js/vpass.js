function validatePasswords() {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('v-password').value;

    if (password !== confirmPassword) {
        alert('Las contraseñas no coinciden.'); // Mensaje de alerta
        return false; // Evita el envío del formulario
    }
    return true; // Permite el envío del formulario
}