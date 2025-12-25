{{-- filepath: resources/views/admin/products.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin - Catálogo de Productos | Solo Chifles</title>
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
    <div class="container mt-5">
        <h2 class="section-heading mb-4">
            <span class="section-heading-lower">Editar Catalogo de Productos</span>
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

        <form action="{{ route('admin.pages.update', $page->slug) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
        <label for="product1_title" class="form-label">Título Producto 1</label>
        <input type="text" name="product1_title" id="product1_title" class="form-control" value="{{ old('product1_title', $page->product1_title) }}">
        </div>
        <div class="mb-3">
            <label for="product1_price" class="form-label">Precio Producto 1</label>
            <input type="text" name="product1_price" id="product1_price" class="form-control" value="{{ old('product1_price', $page->product1_price) }}">
        </div>
        <div class="mb-4">
            <label for="product1_content" class="form-label">Descripción Producto 1</label>
            <textarea name="product1_content" id="product1_content" class="form-control" rows="4">{{ old('product1_content', $page->product1_content) }}</textarea>
        </div>
        <div class="mb-4">
            <label for="product1_image" class="form-label">Imagen Producto 1 (JPG, PNG)</label>
            <input type="file" name="product1_image" id="product1_image" class="form-control" accept="image/*">
            @if(!empty($page->product1_image))
            <div class="mt-2">
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                src="{{ asset('storage/' . $page->product1_image) }}"
                alt="Producto 1" style="max-width: 150px; width: 100%; height: 100%; object-fit: cover;"/>
            </div>
        @endif
        </div>
            <hr>
            <div class="mb-3">
        <label for="product2_title" class="form-label">Título Producto 2</label>
        <input type="text" name="product2_title" id="product2_title" class="form-control" value="{{ old('product2_title', $page->product2_title) }}">
        </div>
        <div class="mb-3">
            <label for="product2_price" class="form-label">Precio Producto 2</label>
            <input type="text" name="product2_price" id="product2_price" class="form-control" value="{{ old('product2_price', $page->product2_price) }}">
        </div>
        <div class="mb-4">
            <label for="product2_content" class="form-label">Descripción Producto 2</label>
            <textarea name="product2_content" id="product2_content" class="form-control" rows="4">{{ old('product2_content', $page->product2_content) }}</textarea>
        </div>
        <div class="mb-4">
            <label for="product2_image" class="form-label">Imagen Producto 2 (JPG, PNG)</label>
            <input type="file" name="product2_image" id="product2_image" class="form-control" accept="image/*">
            @if(!empty($page->product2_image))
            <div class="mt-2">
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
                src="{{ asset('storage/' . $page->product2_image) }}"
                alt="Producto 2" style="max-width: 150px; width: 100%; height: 100%; object-fit: cover;"/>
            </div>
        @endif
        </div>
            <button type="submit" class="btn btn-success">Guardar cambios</button>
                <a href="{{ route('page.show', ['slug' => 'about']) }}" class="btn btn-secondary">Ver página pública</a>
        </form>
    </div>
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
    <script>
        function redirectToOrderForm() {
            window.location.href = "{{ route('pedido_form') }}";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>