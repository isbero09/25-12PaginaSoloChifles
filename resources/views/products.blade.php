<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Start Sitio Web Solo Chifles</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}">
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
        ...
<section class="page-section">
    <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex ms-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-upper">{{ $page->product1_price ?? '$1.00' }}</span>
                            <span class="section-heading-lower">{{ $page->product1_title ?? 'Chifle de Sabor Salado' }}</span>
                        </h2>
                    </div>
                </div>
                <img 
                src="{{ !empty($page->product1_image) ? asset('storage/' . $page->product1_image) : asset('assets/img/EnbolsaSolochifles.jpg') }}" 
                alt="Producto 1"
                class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                style="width: 700px; height: 700px; object-fit: cover;"
            />
                <div class="product-item-description d-flex me-auto">
                    <div class="bg-faded p-5 rounded"><p class="mb-0">{{ $page->product1_content ?? 'Chifles tradicionales, finamente cortados y ligeramente salados.' }}</p></div>
                </div>
            </div>
    </div>
</section>
<section class="page-section">
    <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-5 d-flex ms-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-upper">{{ $page->product2_price ?? '$1.50' }}</span>
                            <span class="section-heading-lower">{{ $page->product2_title ?? 'Maduritos' }}</span>
                        </h2>
                    </div>
                </div>
                <img 
                src="{{ !empty($page->product2_image) ? asset('storage/' . $page->product2_image) : asset('assets/img/Maduritos.PNG') }}" 
                alt="Producto 2"
                class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                style="width: 700px; height: 700px; object-fit: cover;"
            />
                <div class="product-item-description d-flex me-auto">
                    <div class="bg-faded p-5 rounded"><p class="mb-0">{{ $page->product2_content ?? 'Maduritos con un toque especial de ajo, crujientes y sabrosos.' }}</p></div>
                </div>
            </div>
    </div>
</section>
<section class="order-section">
    <div class="container text-center" style="padding-top: 30px;">
        <button onclick="redirectToOrderForm()" class="btn btn-primary">Ir al formulario de pedido</button>
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
    function redirectToOrderForm() {
        window.location.href = "{{ route('pedido_form') }}";
    }
</script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>