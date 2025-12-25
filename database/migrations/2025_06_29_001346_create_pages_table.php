<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // index, about, products, store, reviews
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->longText('cta_content')->nullable();
            $table->longText('values_content')->nullable();
            $table->longText('product1_content')->nullable();
            $table->longText('product2_content')->nullable();
            $table->longText('schedules_content')->nullable();
            $table->longText('phone_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
