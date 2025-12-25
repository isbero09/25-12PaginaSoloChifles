{{-- filepath: resources/views/admin/store.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin - Contactos | Solo Chifles</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>
<body>
    <header class="main-header">
        <div class="logo">
            <img src="{{ asset('assets/img/solo-chifles-sin-fondo-1.png') }}" alt="Logo Solo Chifles">
        </div>
        <div class="site-title">
            <span class="site-heading-upper">El sabor que cruje en cada momento especial</span>
            <h1 class="site-heading-lower">Solo Chifles</h1>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg" id="mainNav">
        <div class="container">
            <div class="navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.about') }}">Acerca de Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.products') }}">Catálogo de Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.store') }}">Contactos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('admin.reviews') }}">Reseñas</a></li>
                </ul>
            </div>
            <div class="d-flex">
                <a href="{{ route('page.show', ['slug' => 'index']) }}" class="btn btn-warning btn-lg px-4 py-2 fw-bold text-dark shadow-sm">
                    <i class="fas fa-sign-in-alt me-2"></i>PARTIR
                </a>
            </div>
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
                        {{-- Mensajes de éxito y error --}}
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.pages.update', $page->slug) }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="sunday_hours" class="form-label">Domingo</label>
                                <input type="text" name="sunday_hours" id="sunday_hours" class="form-control" value="{{ old('sunday_hours', $page->sunday_hours ?? 'Cerrado') }}">
                            </div>
                            <div class="mb-3">
                                <label for="monday_hours" class="form-label">Lunes</label>
                                <input type="text" name="monday_hours" id="monday_hours" class="form-control" value="{{ old('monday_hours', $page->monday_hours ?? '7:00 AM hasta 8:00 PM') }}">
                            </div>
                            <div class="mb-3">
                                <label for="tuesday_hours" class="form-label">Martes</label>
                                <input type="text" name="tuesday_hours" id="tuesday_hours" class="form-control" value="{{ old('tuesday_hours', $page->tuesday_hours ?? '7:00 AM hasta 8:00 PM') }}">
                            </div>
                            <div class="mb-3">
                                <label for="wednesday_hours" class="form-label">Miércoles</label>
                                <input type="text" name="wednesday_hours" id="wednesday_hours" class="form-control" value="{{ old('wednesday_hours', $page->wednesday_hours ?? '7:00 AM hasta 8:00 PM') }}">
                            </div>
                            <div class="mb-3">
                                <label for="thursday_hours" class="form-label">Jueves</label>
                                <input type="text" name="thursday_hours" id="thursday_hours" class="form-control" value="{{ old('thursday_hours', $page->thursday_hours ?? '7:00 AM hasta 8:00 PM') }}">
                            </div>
                            <div class="mb-3">
                                <label for="friday_hours" class="form-label">Viernes</label>
                                <input type="text" name="friday_hours" id="friday_hours" class="form-control" value="{{ old('friday_hours', $page->friday_hours ?? '7:00 AM hasta 8:00 PM') }}">
                            </div>
                            <div class="mb-3">
                                <label for="saturday_hours" class="form-label">Sábado</label>
                                <input type="text" name="saturday_hours" id="saturday_hours" class="form-control" value="{{ old('saturday_hours', $page->saturday_hours ?? '9:00 AM hasta 5:00 PM') }}">
                            </div>
                            <div class="mb-4">
                                <label for="phone_content" class="form-label"><strong>Número de contacto</strong></label>
                                <input type="text" name="phone_content" id="phone_content" class="form-control" value="{{ old('phone_content', $page->phone_content ?? '0963923907') }}">
                            </div>
                            <button type="submit" class="btn btn-success">Guardar cambios</button>
                <a href="{{ route('page.show', ['slug' => 'about']) }}" class="btn btn-secondary">Ver página pública</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <span class="m-0 small">&copy; SoloChifles Sitio Web</span>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>