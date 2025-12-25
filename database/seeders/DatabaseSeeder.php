<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PagesTableSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(PagesTableSeeder::class);
    }
}