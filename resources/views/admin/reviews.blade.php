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
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <header class="main-header">
            <div class="logo">
                <img src="{{ asset('assets/img/solo-chifles-sin-fondo-1.png') }}" alt="Logo Solo Chifles">
            </div>            
            </div>
            <div class="site-title">
                <span class="site-heading-upper">El sabor que cruje en cada momento especial</span>
                <h1 class="site-heading-lower">Solo Chifles</h1>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg" id="mainNav">
            <div class="container">
                <!-- Navbar con las secciones -->
                <div class="navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
    <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">Inicio</a></li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.about') }}">Acerca de Nosotros</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.products') }}">Catálogo de Productos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.store') }}">Contactos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.reviews') }}">Reseñas</a>
    </li>
</ul>
                </div>
                <!-- Contenedor separado para el botón "Acceder" -->
                <div class="d-flex">
    <a href={{ route('page.show', ['slug' => 'index']) }}" class="btn btn-warning btn-lg px-4 py-2 fw-bold text-dark shadow-sm">
    <i class="fas fa-sign-in-alt me-2"></i>PARTIR
    </a>
</div>                 
            </div>
        </nav>        
        <section class="page-section reviews-section">
            <div class="container">
                <h2 class="text-center section-heading mb-5">
                    <span class="section-heading-upper">Lo que dicen nuestros clientes</span>
                    <span class="section-heading-lower">Reseñas</span>
                </h2>
                
                <!-- Lista de reseñas -->
                <div class="review-list mb-5">
                    <div class="review-item bg-light p-4 rounded mb-4">
                        <h4>Juan Pérez</h4>
                        <p><em>"Los chifles son deliciosos y perfectos para compartir con amigos. ¡Definitivamente los recomiendo!"</em></p>
                        <div class="rating">
                            ⭐⭐⭐⭐⭐
                        </div>
                    </div>
                    <div class="review-item bg-light p-4 rounded mb-4">
                        <h4>María Gómez</h4>
                        <p><em>"Me encantaron los maduritos con ajo, son únicos y crujientes. ¡Volveré a comprar!"</em></p>
                        <div class="rating">
                            ⭐⭐⭐⭐⭐
                        </div>
                    </div>
                </div>
        
                <!-- Formulario para nuevas reseñas -->
                <div class="review-form bg-faded p-4 rounded">
                    <h3>Deja tu reseña</h3>
                    <form id="reviewForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tu Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Calificación</label>
                            <select class="form-control" id="rating" required>
                                <option value="5">⭐⭐⭐⭐⭐ (5 estrellas)</option>
                                <option value="4">⭐⭐⭐⭐ (4 estrellas)</option>
                                <option value="3">⭐⭐⭐ (3 estrellas)</option>
                                <option value="2">⭐⭐ (2 estrellas)</option>
                                <option value="1">⭐ (1 estrella)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="review" class="form-label">Tu Reseña</label>
                            <textarea class="form-control" id="review" rows="4" placeholder="Escribe tu reseña aquí..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Reseña</button>
                    </form>
                </div>
            </div>
        </section>        
        <footer class="footer text-faded text-center py-5">
            <div class="container">
                <h class="m-0 small">Copyright &copy; SoloChifles Sitio Web</h>
                <div class="social-icons mt-3">
                    <a href="https://www.facebook.com/solochifles" target="_blank" class="social-link">
                        <img src="{{ asset('assets/img/icon/facebook.png') }}" alt="Facebook">
                        </a>
                    <a href="https://www.instagram.com/solochifles?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="social-link">
                        <img src="{{ asset('assets/img/icon/instagram.png') }}" alt="Instagram">
                        </a>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../Administrador/js/scripts.js"></script>
    </body>
</html>