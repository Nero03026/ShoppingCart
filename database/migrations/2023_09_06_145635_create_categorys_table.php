<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categorys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('img_path')->default('');
            $table->string('name');
            $table->string('slug')->default('');
            $table->integer('parent')->nullable();
            $table->date('date')->default(now());
            $table->longText('descriptions')->default('');
            $table->integer('status')->default('1');
            $table->string('meta_title')->default('');
            $table->string('meta_description')->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorys');
    }
};
