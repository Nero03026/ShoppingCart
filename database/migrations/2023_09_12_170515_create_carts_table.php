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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('qty')->default(1)->nullable();
            $table->integer('products_id')->default(0)->nullable();
            $table->integer('user_id')->default(0)->nullable();
            $table->integer('products_active')->default(1)->nullable()->comment('選擇商品');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
