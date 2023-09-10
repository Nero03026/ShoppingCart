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
            $table->string('product_name')->default('');
            $table->integer('product_category')->default('0');
            $table->integer('product_weight')->default('0');
            $table->integer('product_units')->default('0');
            $table->string('product_image')->default('');
            $table->longText('product_descriptions')->default('');
            // 表02
            $table->integer('product_stock')->default('0')->nullable();
            $table->string('product_code')->default('');
            $table->string('product_sku')->default('');
            $table->integer('product_status')->default('1');
            // 表03
            $table->integer('price_regular')->default('0');
            $table->integer('price_sale')->default('0');
            // 表04
            $table->string('meta_title')->default('');
            $table->string('meta_description')->default('');
            // 表05
            $table->integer('user_id')->default('0');
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
