<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    // Mostrar página pública
    public function show($slug = 'index')
{
    $page = Page::where('slug', $slug)->firstOrFail();
    return view($slug, compact('page'));
}
}