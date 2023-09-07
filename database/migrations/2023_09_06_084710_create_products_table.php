<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            // 表01
            $table->string('title');
            $table->integer('category')->default('0');
            $table->integer('weight')->default('0');
            $table->integer('units')->default('0');
            $table->string('img_path')->default('');
            $table->longText('descriptions')->default('');
            // 表02
            $table->integer('stock')->default('0');
            $table->string('product_code')->default('');
            $table->string('product_sku')->default('');
            $table->integer('status')->default('1');
            // 表03
            $table->integer('price_regular')->default('0');
            $table->integer('price_sale')->default('0');
            // 表04
            $table->string('meta_title')->default('');
            $table->string('meta_description')->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
