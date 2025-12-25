{{-- filepath: resources/views/emails/pedido_realizado.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Pedido Recibido</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f8fafc;
            color: #222;
            margin: 0;
            padding: 0;
        }
        .container {
            background: #fff;
            border-radius: 10px;
            max-width: 480px;
            margin: 30px auto;
            padding: 32px 24px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        }
        h2 {
            color: #e67e22;
            margin-bottom: 24px;
            text-align: center;
        }
        .detalle {
            margin-bottom: 18px;
        }
        .label {
            font-weight: bold;
            color: #e67e22;
            width: 120px;
            display: inline-block;
        }
        .valor {
            color: #222;
        }
        .footer {
            margin-top: 32px;
            text-align: center;
            color: #aaa;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>¡Nuevo Pedido Recibido!</h2>
        <div class="detalle"><span class="label">Producto:</span> <span class="valor">{{ $datos['producto'] }}</span></div>
        <div class="detalle"><span class="label">Cantidad:</span> <span class="valor">{{ $datos['cantidad'] }}</span></div>
        <div class="detalle"><span class="label">Nombre:</span> <span class="valor">{{ $datos['nombre'] }}</span></div>
        <div class="detalle"><span class="label">Teléfono:</span> <span class="valor">{{ $datos['telefono'] }}</span></div>
        <div class="detalle"><span class="label">Email:</span> <span class="valor">{{ $datos['email'] }}</span></div>
        <div class="detalle"><span class="label">Dirección:</span> <span class="valor">{{ $datos['direccion'] }}</span></div>
        <div class="footer">
            Solo Chifles &copy; {{ date('Y') }}
        </div>
    </div>
</body>
</html>