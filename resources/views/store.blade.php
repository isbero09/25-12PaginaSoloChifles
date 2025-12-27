<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Start Sitio Web Solo Chifles</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <header class="main-header">
            <div class="logo">
                <img src="assets\img\solo-chifles-sin-fondo-1.png" alt="Logo Solo Chifles">
            </div>            
            </div>
            <div class="site-title">
                <span class="site-heading-upper">El sabor que cruje en cada momento especial</span>
                <h1 class="site-heading-lower">Solo Chifles</h1>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg" id="mainNav">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navbar con las secciones -->
                <div class="navbar-collapse collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">Acerca de Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/products') }}">Catálogo de Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/store') }}">Contactos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/reviews') }}">Reseñas</a>
                        </li>
                    </ul>
                </div>
                <!-- Contenedor separado para el botón "Acceder" -->
                <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-warning btn-lg px-4 py-2 fw-bold text-dark shadow-sm">
                <i class="fas fa-sign-in-alt me-2"></i>Acceder
                </a>
            </div> 
        </nav>        
        <section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Visítanos</span>
                        <span class="section-heading-lower">ESTAMOS ABIERTOS</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Domingo
                            <span class="ms-auto">{{ $page->sunday_hours ?? 'Cerrado' }}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Lunes
                            <span class="ms-auto">{{ $page->monday_hours ?? '7:00 AM hasta 8:00 PM' }}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Martes
                            <span class="ms-auto">{{ $page->tuesday_hours ?? '7:00 AM hasta 8:00 PM' }}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Miércoles
                            <span class="ms-auto">{{ $page->wednesday_hours ?? '7:00 AM hasta 8:00 PM' }}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Jueves
                            <span class="ms-auto">{{ $page->thursday_hours ?? '7:00 AM hasta 8:00 PM' }}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Viernes
                            <span class="ms-auto">{{ $page->friday_hours ?? '7:00 AM hasta 8:00 PM' }}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Sábado
                            <span class="ms-auto">{{ $page->saturday_hours ?? '9:00 AM hasta 5:00 PM' }}</span>
                        </li>
                    </ul>
                    <p class="mb-0">
                    <small><em>Comunícate en cualquier momento:</em></small>
                    <a href="https://wa.me/{{ '593' . ltrim($page->phone_content, '0') }}" target="_blank">
                    {{ $page->phone_content }}
                </a>
                </p>
                </div>
            </div>
        </div>
    </div>
</section>
        <section class="contact-section">
            <div class="container">
                <h1>Contáctanos</h1>
                <p class="text-center mb-4">
                    ¿Tienes dudas o necesitas más información sobre nuestros productos? Completa el formulario y responderemos tus consultas lo antes posible.
                </p>
                @if(session('success'))
                <div style="color: green; text-align:center;">{{ session('success') }}</div>
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
                <form id="contactForm" method="POST" action="{{ route('contacto_enviar') }}">
                @csrf
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Ingresa tu nombre completo" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="tucorreo@ejemplo.com" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="phone" class="form-label">Número de Teléfono</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="123-456-7890" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="consultationType" class="form-label">Motivo de la Consulta</label>
                        <select class="form-control" id="consultationType" name="consultationType" required>
                            <option value="Información sobre productos">Información sobre productos</option>
                            <option value="Asesoramiento en compras">Asesoramiento en compras</option>
                            <option value="Consultas generales">Consultas generales</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Escribe tu consulta aquí..." required></textarea>
                    </div>
                
                    <button type="submit" class="submit-btn">Enviar Consulta</button>
                </form>
                
                <!-- Mensaje de confirmación -->
                <div id="confirmationMessage" style="display:none; padding: 20px; background-color: #d4edda; border: 1px solid #c3e6cb; color: #155724; border-radius: 5px;">
                    ¡Gracias por tu consulta! Nos comunicaremos contigo lo antes posible.
                </div>                
            </div>
        </section>
        <footer class="footer text-faded text-center py-5">
            <div class="container">
                <h class="m-0 small">Copyright &copy; SoloChifles Sitio Web</h>
                <div class="social-icons mt-3">
                    <a href="https://www.facebook.com/solochifles" target="_blank" class="social-link">
                        <img src="assets\img\icon\facebook.png" alt="Facebooks">
                        </a>
                    <a href="https://www.instagram.com/solochifles?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="social-link">
                        <img src="assets\img\icon\instagram.png" alt="Instagram">
                        </a>
                </div>
            </div>
        </footer> 
        <script>
            // Validación de solo números para el campo de teléfono
            //document.getElementById('phone').addEventListener('input', function(event) {
                // Eliminar caracteres no numéricos
                //event.target.value = event.target.value.replace(/\D/g, '');
            //});
        
            // Manejo del envío del formulario
            //document.getElementById('contactForm').addEventListener('submit', function(event) {
                //event.preventDefault(); // Prevenir el comportamiento predeterminado del formulario
        
                // Mostrar mensaje de confirmación
                //document.getElementById('confirmationMessage').style.display = 'block';
        
                // Ocultar el formulario (opcional, si quieres que el formulario desaparezca)
                //document.getElementById('contactForm').style.display = 'none';
            //});
        </script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>