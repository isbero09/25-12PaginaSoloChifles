<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    // Mostrar página pública
    public function show($slug = 'index')
    {
        $page = Page::where('slug', $slug)->first();

        if (!$page) {
            // Si no hay páginas en absoluto, intentamos sembrar la base de datos
            // Esto es útil para la primera implementación en Render
            if (Page::count() === 0) {
                try {
                    \Illuminate\Support\Facades\Artisan::call('db:seed', ['--force' => true]);
                    $page = Page::where('slug', $slug)->first();
                } catch (\Exception $e) {
                    // Si falla el seed, continuamos para mostrar el error 404 normal
                }
            }

            if (!$page) {
                abort(404);
            }
        }

        return view($slug, compact('page'));
    }
}