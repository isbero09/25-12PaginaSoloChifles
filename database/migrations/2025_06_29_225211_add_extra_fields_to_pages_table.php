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
        $table->longText('value_1')->nullable();
        $table->longText('value_2')->nullable();
        $table->longText('value_3')->nullable();
        $table->longText('value_4')->nullable();
        $table->longText('cta_content')->nullable();
        $table->longText('content')->nullable();
        $table->longText('product1_content')->nullable();
        $table->longText('product2_content')->nullable();
        $table->longText('schedules_content')->nullable();
        $table->string('phone_content')->nullable();
        $table->string('product1_title')->nullable();
        $table->string('product1_price')->nullable();
        $table->string('product2_title')->nullable();
        $table->string('product2_price')->nullable();
    });
}

public function down()
{
    Schema::table('pages', function (Blueprint $table) {
        $table->dropColumn([
            'value_1',
            'value_2',
            'value_3',
            'value_4',
            'cta_content',
            'content',
            'product1_content',
            'product2_content',
            'schedules_content',
            'phone_content',
            'product1_title',
            'product1_price',
            'product2_title',
            'product2_price',
        ]);
    });
}
};