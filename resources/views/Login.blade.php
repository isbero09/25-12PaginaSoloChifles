<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Solo Chifles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="css/styleslogin.css" rel="stylesheet">
</head>
@section('content')
<div class="login-container">
    <div class="btn-back">
        <button onclick="window.location.href='{{ url('/') }}'">Volver</button>
    </div>
    <div class="logo-container">
        <img src="{{ asset('assets/img/logo transparebte.png') }}" alt="Logo">
    </div>
    <div class="login-header">
        <h1>Bienvenido a Solo Chifles</h1>
        <p>Inicia sesión para continuar</p>
    </div>

    <!-- LOGIN FORM -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Usuario</label>
            <div class="input-group">
                <input type="email" class="form-control" id="username" name="username" placeholder="Ingresa tu correo" required>
                <span class="input-group-text icon-container"><i class="fa-solid fa-user-large"></i></span>
            </div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()">
                    <i class="fa fa-eye" id="toggleEye"></i>
                </button>
            </div>
        </div>
        <button type="submit" class="btn btn-login">Iniciar Sesión</button>
    </form>

    <div class="login-footer">
        <p>¿Olvidaste tu contraseña? <a href="#">Recupérala aquí</a></p>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const toggleEye = document.getElementById('toggleEye');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleEye.classList.remove('fa-eye');
            toggleEye.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleEye.classList.remove('fa-eye-slash');
            toggleEye.classList.add('fa-eye');
        }
    }
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>