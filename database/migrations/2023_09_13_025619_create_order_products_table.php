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
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('order_id')->nullable()->default(NULL);
            $table->integer('product_id')->nullable()->default(NULL);
            $table->integer('product_qty')->nullable()->default(NULL);
            $table->string('product_name')->nullable()->default(NULL);
            $table->string('product_category')->nullable()->default(NULL);
            $table->string('product_image')->nullable()->default(NULL);
            $table->integer('product_sale')->nullable()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
