<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    public function run()
    {
        $pages = [
            ['slug' => 'about', 'content' => 'Contenido inicial de About'],
            ['slug' => 'index', 'content' => 'Contenido inicial de Index'],
            ['slug' => 'products', 'content' => 'Contenido inicial de Products'],
            ['slug' => 'reviews', 'content' => 'Contenido inicial de Reviews'],
            ['slug' => 'store', 'content' => 'Contenido inicial de Store'],
        ];

        foreach ($pages as $page) {
            Page::updateOrCreate(['slug' => $page['slug']], ['content' => $page['content']]);
        }
    }
}