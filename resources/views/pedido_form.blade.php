
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Avanzado de Pedidos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #ffe0b2, #ffcc80);
            color: #333;
        }

        .main-header {
            text-align: center;
            padding: 20px;
            background-color: #ff9800;
            color: white;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .main-header h1 {
            margin: 0;
            font-size: 2.8rem;
            font-weight: 600;
        }

        .order-form {
            margin: 50px auto;
            max-width: 600px;
            padding: 30px;
            background: white;
            border-radius: 15px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.8rem;
            font-weight: 600;
            color: #ff9800;
        }

        .form-group {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            position: relative;
        }

        .form-group .form-label {
            font-weight: 600;
            margin-bottom: 8px;
            color: #ff9800;
            flex-basis: 30%;
        }

        .form-group .form-control {
    width: 100%;
    padding: 12px 15px;
    padding-right: 40px; /* espacio para los íconos */
    border: 1px solid #ddd;
    border-radius: 10px;
    font-size: 1rem;
    font-family: 'Poppins', sans-serif; /* Aseguramos que todos los campos tengan la misma fuente */
    box-sizing: border-box; /* Asegura que el padding y el borde no afecten el tamaño del campo */
}

select.form-control {
    appearance: none; /* Esto puede ayudar a mejorar la apariencia en algunos navegadores */
    -webkit-appearance: none;
    -moz-appearance: none;
}

        .form-group .form-control:focus {
            outline: none;
            border-color: #ff9800;
            box-shadow: 0 0 5px rgba(255, 152, 0, 0.5);
        }

        .form-group .form-control-icon {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            color: #ff9800;
            font-size: 1.2rem;
        }

        .form-group .form-control-icon:hover {
            color: #e68900;
        }

        .btn-submit {
            display: block;
            width: 100%;
            padding: 12px;
            font-size: 1.2rem;
            font-weight: bold;
            color: white;
            background: #ff9800;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.2s ease;
        }

        .btn-submit:hover {
            background: #e68900;
            transform: scale(1.05);
        }

        .btn-submit:active {
            background: #cc7900;
            transform: scale(1);
        }

        textarea {
            resize: none;
        }

        @media (max-width: 768px) {
            .main-header h1 {
                font-size: 2rem;
            }

            .order-form {
                padding: 20px;
            }

            .btn-submit {
                font-size: 1rem;
            }
        }

        .back-button {
            position: fixed;
            top: 20px;
            left: 20px;
            padding: 10px 20px;
            background-color: #cccccc;
            color: #333;
            font-size: 1rem;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            background-color: #b3b3b3;
        }
    </style>
</head>

<body>
    <button class="back-button" onclick="window.location.href='{{ route('page.show', ['slug' => 'index']) }}';">Volver</button>
    <header class="main-header">
        <h1>Realiza tu Pedido</h1>
    </header>

    <section class="order-form">
        <h2 class="form-title">Detalles del Pedido</h2>
        @if(session('success'))
    <div style="color: green; text-align:center;">{{ session('success') }}</div>
@endif
@if(session('error'))
    <div style="color: red; text-align:center;">{{ session('error') }}</div>
@endif
@if($errors->any())
    <div style="color: red;">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form method="POST" action="{{ route('pedido_enviar') }}">
    @csrf
    <div class="form-group">
                <label for="product" class="form-label">Producto</label>
                <select id="product" name="producto" class="form-control" required>
                    <option value="" disabled selected>Selecciona un producto</option>
                    <option value="Chifle Salado">Chifle Salado</option>
                    <option value="Maduritos">Maduritos</option>
                </select>
                <i class="fas fa-box form-control-icon"></i>
            </div>

            <div class="form-group">
                <label for="quantity" class="form-label">Cantidad</label>
                <input type="number" id="quantity" name="cantidad" class="form-control" min="1" placeholder="Ingresa la cantidad" required>
                <i class="fas fa-sort-numeric-up-alt form-control-icon"></i>
            </div>

            <div class="form-group">
                <label for="customerName" class="form-label">Nombre Completo</label>
                <input type="text" id="customerName" name="nombre" class="form-control" placeholder="Ingresa tu nombre completo" required>
                <i class="fas fa-user form-control-icon"></i>
            </div>

            <div class="form-group">
                <label for="customerPhone" class="form-label">Teléfono</label>
                <input type="text" id="customerPhone" name="telefono" class="form-control" placeholder="Ingresa tu número de teléfono" required maxlength="10">
                <i class="fas fa-phone form-control-icon"></i>
            </div>       
            
            <div class="form-group">
    <label for="customerEmail" class="form-label">Correo Electrónico</label>
    <input type="email" id="customerEmail" name="email" class="form-control" placeholder="Ingresa tu correo electrónico" required>
    <i class="fas fa-envelope form-control-icon"></i>
</div>
             
            <div class="form-group">
                <label for="customerAddress" class="form-label">Dirección</label>
                <textarea id="customerAddress" name="direccion" class="form-control" rows="3" placeholder="Ingresa tu dirección completa" required></textarea>
                <i class="fas fa-map-marker-alt form-control-icon"></i>
            </div>

            <button type="submit" class="btn-submit">Enviar Pedido</button>
</form>
        <p style="text-align: center; margin-top: 20px;">Al enviar este formulario, aceptas nuestros <a href="{{ route('page.show', ['slug' => 'terminos']) }}">Términos y Condiciones</a>.</p>
    </section>

    <script>
        document.getElementById('customerPhone').addEventListener('input', function (e) {
        // Reemplaza cualquier carácter que no sea un número
        e.target.value = e.target.value.replace(/\D/g, '');
    });
        function validateForm(event) {
            event.preventDefault();
            alert("¡Pedido enviado con éxito! Nos pondremos en contacto contigo pronto.");
        }
    </script>
</body>
</html>