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
    Schema::table('pages', function (Blueprint $table) {
        $table->string('sunday_hours')->nullable();
        $table->string('monday_hours')->nullable();
        $table->string('tuesday_hours')->nullable();
        $table->string('wednesday_hours')->nullable();
        $table->string('thursday_hours')->nullable();
        $table->string('friday_hours')->nullable();
        $table->string('saturday_hours')->nullable();
    });
}

public function down()
{
    Schema::table('pages', function (Blueprint $table) {
        $table->dropColumn([
            'sunday_hours', 'monday_hours', 'tuesday_hours', 'wednesday_hours',
            'thursday_hours', 'friday_hours', 'saturday_hours'
        ]);
    });
}};