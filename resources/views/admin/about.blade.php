{{-- filepath: resources/views/admin/about.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="keywords" content="chifles, plátanos, tradición artesanal, Solo Chifles, historia, valores">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin - Sobre Nosotros | Solo Chifles</title>
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
    <section class="page-section about-heading">
        <div class="container">
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

            <form action="{{ route('admin.pages.update', $page->slug) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Si usas resource y método PUT --}}
                @method('POST')

                <div class="mb-3">
                    <label for="value_1" class="form-label">Valor 1</label>
                    <input type="text" name="value_1" id="value_1" class="form-control" value="{{ old('value_1', $page->value_1) }}">
                </div>
                <div class="mb-3">
                    <label for="value_2" class="form-label">Valor 2</label>
                    <input type="text" name="value_2" id="value_2" class="form-control" value="{{ old('value_2', $page->value_2) }}">
                </div>
                <div class="mb-3">
                    <label for="value_3" class="form-label">Valor 3</label>
                    <input type="text" name="value_3" id="value_3" class="form-control" value="{{ old('value_3', $page->value_3) }}">
                </div>
                <div class="mb-3">
                    <label for="value_4" class="form-label">Valor 4</label>
                    <input type="text" name="value_4" id="value_4" class="form-control" value="{{ old('value_4', $page->value_4) }}">
                </div>

                <center>
                    <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{ asset('assets/img/Portadachifles.jpg') }}" alt="..." style="width: 750px; height: auto;">
                </center>
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5 mb-4">
                                <label for="content" class="form-label"><strong>Sobre Nosotros</strong></label>
                                <textarea name="content" id="content" class="form-control" rows="10">{{ old('content', $page->content ?? '') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="video_file" class="form-label"><strong>Video (sube un archivo MP4)</strong></label>
                    <input type="file" name="video_file" id="video_file" class="form-control" accept="video/mp4">
                    <small class="text-muted">Solo se permite formato MP4. Si subes un nuevo video, reemplazará el actual.</small>
                </div>

                @if(!empty($page->video_url))
                    <div class="mb-3">
                        <label class="form-label"><strong>Video actual:</strong></label>
                        <video width="100%" controls>
                            <source src="{{ asset('storage/' . $page->video_url) }}" type="video/mp4">
                            Tu navegador no soporta el elemento de video.
                        </video>
                    </div>
                @endif
                <button type="submit" class="btn btn-success">Guardar cambios</button>
                <a href="{{ route('page.show', ['slug' => 'about']) }}" class="btn btn-secondary">Ver página pública</a>
            </form>
        </div>
    </section>
    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <span class="m-0 small">Copyright &copy; SoloChifles Sitio Web</span>
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
</body>
</html>