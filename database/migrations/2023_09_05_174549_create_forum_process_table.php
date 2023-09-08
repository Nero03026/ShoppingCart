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
        Schema::create('forum_process', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('target')->nullable();
            $table->unsignedBigInteger('forum_id')->nullable();
            $table->integer('user_id')->default('0')->nullable();
            $table->foreign('forum_id')->references('id')->on('forums')->onDelete('cascade');
            $table->foreign('target')->references('id')->on('forum_process')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_process');
    }
};
