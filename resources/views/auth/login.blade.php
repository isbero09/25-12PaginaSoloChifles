{{-- filepath: c:\xampp\php\Solo-Chifles-Web - copia\Websolochifles\resources\views\auth\login.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - Solo Chifles</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/styleslogin.css') }}" rel="stylesheet">
</head>
<body>
<div class="login-container">
    <div class="btn-back mb-3">
        <button class="btn btn-secondary" onclick="window.location.href='{{ url('/') }}'">Volver</button>
    </div>
    <div class="logo-container">
        <img src="{{ asset('assets/img/logo transparebte.png') }}" alt="Logo">
    </div>
    <div class="login-header">
        <h1>Bienvenido a Solo Chifles</h1>
        <p>Inicia sesión para continuar</p>
    </div>

    <!-- Mensajes de error -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- LOGIN FORM -->
    <form method="POST" action="{{ route('login') }}" onsubmit="disableLoginButton()">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Correo electrónico</label>
            <div class="input-group">
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Ingresa tu correo" required autofocus aria-label="Correo electrónico">
                <span class="input-group-text icon-container"><i class="fa-solid fa-user-large"></i></span>
            </div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required aria-label="Contraseña">
                <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()" aria-label="Mostrar u ocultar contraseña">
                    <i class="fa fa-eye" id="toggleEye"></i>
                </button>
            </div>
        </div>
        <button type="submit" class="btn btn-login w-100" id="loginBtn">
            Iniciar Sesión
            <span id="spinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
        </button>
    </form>

    <div class="login-footer mt-3">
        <p>¿Olvidaste tu contraseña? <a href="{{ route('password.request') }}">Recupérala aquí</a></p>
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

    function disableLoginButton() {
        const btn = document.getElementById('loginBtn');
        const spinner = document.getElementById('spinner');
        btn.disabled = true;
        spinner.classList.remove('d-none');
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>