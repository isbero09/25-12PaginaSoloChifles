{{-- filepath: resources/views/emails/contacto_recibido.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Consulta de Contacto</title>
</head>
<body>
    <h2>¡Nueva Consulta de Contacto!</h2>
    <p><strong>Nombre:</strong> {{ $datos['fullName'] }}</p>
    <p><strong>Email:</strong> {{ $datos['email'] }}</p>
    <p><strong>Teléfono:</strong> {{ $datos['phone'] }}</p>
    <p><strong>Motivo:</strong> {{ $datos['consultationType'] }}</p>
    <p><strong>Mensaje:</strong> {{ $datos['message'] }}</p>
</body>
</html>