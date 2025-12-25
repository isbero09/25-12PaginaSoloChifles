<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="keywords" content="chifles, plátanos, tradición artesanal, Solo Chifles, historia, valores">
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
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        <style>
            /* Estilo personalizado para las fuentes */
            .section-heading-upper {
                font-family: 'Pacifico', cursive;
                font-size: 1.5rem;
                color: #d57a28;
            }

            .section-heading-lower {
                font-family: 'Pacifico', cursive;
                font-size: 2rem;
                color: #ff9800;
            }

            p {
                font-family: 'Roboto', sans-serif;
                font-size: 1rem;
                line-height: 1.6;
                color: #333;
            }
        </style>
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
                <!-- Navbar con las secciones -->
                <div class="navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Acerca de Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/products') }}">Catálogo de Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/store') }}">Contactos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/reviews') }}">Reseñas</a></li>
                    </ul>
                </div>
                <!-- Contenedor separado para el botón "Acceder" -->
                <div class="d-flex">
    <a href="{{ route('login') }}" class="btn btn-warning btn-lg px-4 py-2 fw-bold text-dark shadow-sm">
    <i class="fas fa-sign-in-alt me-2"></i>Acceder
    </a>
</div> 
            </div>
        </nav>        
        <section class="page-section about-heading">
            <div class="container">
                <div class="bg-faded rounded p-5">
            <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Nuestros Valores</span>
            </h2>
            <ul>
                <li>{{ $page->value_1 ?? 'Calidad artesanal en cada producto' }}</li>
                <li>{{ $page->value_2 ?? 'Compromiso con la frescura y el sabor' }}</li>
                <li>{{ $page->value_3 ?? 'Preservar la tradición local' }}</li>
                <li>{{ $page->value_4 ?? 'Atención cercana y personalizada' }}</li>
            </ul>
                </div>                
                <center>
                    <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/Portadachifles.jpg" alt="..." style="width: 750px; height: auto;">
                </center>
                <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Solo Chifles, Tradición que Cruje</span>
                            <span class="section-heading-lower">Sobre Nosotros</span>
                        </h2>
                        @if(empty($page->content))
    <p>Fundado en 2000 por la familia Pérez, "Solo Chifles" ha estado ofreciendo chifles de calidad elaborados artesanalmente con los mejores plátanos y condimentos locales. Estamos comprometidos con preservar la tradición, buscando los ingredientes más frescos y llevándolos directamente a tu mesa.</p>
    <p class="mb-0">
        Te garantizamos que te enamorarás del sabor único y crujiente de nuestros chifles desde el primer bocado hasta el último. Acompáñanos en tus reuniones diarias, momentos con amigos o simplemente cuando quieras disfrutar de un antojo especial.
    </p>
@else
    {{ $page->content }}
@endif
                    </div>
                </div>
            </div>
        </div>
                <!-- Botón "Conoce más sobre nuestra historia" -->
                <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#videoModal">Conoce más sobre nuestra historia</a>
                <!-- Modal para el video -->
                <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="videoModalLabel">Nuestra Historia</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                @if(!empty($page->video_url))
                                <video width="100%" controls>
                                    <source src="{{ asset('storage/' . $page->video_url) }}" type="video/mp4">
                                    Tu navegador no soporta el elemento de video.
                                </video>
                            @endif
                            </div>
                        </div>
                    </div>
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>