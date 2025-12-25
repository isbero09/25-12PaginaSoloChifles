<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Solo Chifles')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/styleslogin.css') }}" rel="stylesheet">
</head>
<body>
<div class="login-container">
    <div class="btn-back">
        <button onclick="window.location.href='{{ url('/') }}'">Volver</button>
    </div>
    <div class="logo-container">
        <img src="{{ asset('assets/img/logo transparebte.png') }}" alt="Logo">
    </div>
    <div class="login-header">
        <h1>@yield('header', 'Solo Chifles')</h1>
        <p>@yield('subheader')</p>
    </div>

    @yield('content')

</div>
</body>
</html>