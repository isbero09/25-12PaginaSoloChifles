<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\PageController;
use App\Mail\PedidoRealizado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoRecibido;

// Grupo de rutas para administración
Route::middleware(['auth', IsAdmin::class])->prefix('admin')->group(function () {
    // Página principal del panel admin (sin necesidad de $page)
    Route::get('/', [AdminPageController::class, 'edit'])->name('admin.index')->defaults('slug', 'index');

    // Rutas para cargar páginas con contenido desde la base de datos
    Route::get('/about', [AdminPageController::class, 'edit'])->name('admin.about')->defaults('slug', 'about');
    Route::get('/products', [AdminPageController::class, 'edit'])->name('admin.products')->defaults('slug', 'products');
    Route::get('/store', [AdminPageController::class, 'edit'])->name('admin.store')->defaults('slug', 'store');
    Route::get('/reviews', [AdminPageController::class, 'edit'])->name('admin.reviews')->defaults('slug', 'reviews');

    // Rutas para edición y actualización desde botón guardar
    Route::get('/pages/{slug}/edit', [AdminPageController::class, 'edit'])->name('admin.pages.edit');
    Route::post('/pages/{slug}/edit', [AdminPageController::class, 'update'])->name('admin.pages.update');
});

// Grupo de rutas para perfil de usuario autenticado
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Paneles públicos dinámicos
Route::get('/{slug?}', [PageController::class, 'show'])
    ->whereIn('slug', ['index', 'about', 'products', 'store', 'reviews'])
    ->name('page.show');

// Muestra el formulario de pedido
Route::get('/pedido', function () {
    return view('pedido_form');
})->name('pedido_form');

// Procesa el formulario de pedido
Route::post('/pedido', function (Request $request) {
    $validated = $request->validate([
        'producto' => 'required|string',
        'cantidad' => 'required|integer|min:1',
        'nombre' => 'required|string',
        'telefono' => 'required|string',
        'email' => 'required|email',
        'direccion' => 'required|string',
    ]);

    // Envía el correo
    Mail::to('demo@solochifles.com')->send(new PedidoRealizado($validated));

    return back()->with('success', '¡Pedido enviado con éxito!');
})->name('pedido_enviar');

Route::post('/contacto', function(Request $request) {
    $validated = $request->validate([
        'fullName' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'consultationType' => 'required|string',
        'message' => 'required|string',
    ]);

    try {
        Mail::to('demo@solochifles.com')->send(new \App\Mail\ContactoRecibido($validated));
    } catch (\Exception $e) {
        return back()->with('error', 'Error al enviar el correo: ' . $e->getMessage());
    }

    return back()->with('success', '¡Consulta enviada con éxito!');
})->name('contacto_enviar');

require __DIR__.'/auth.php';
