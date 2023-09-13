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
        Schema::create('order_deatails', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('user_id')->nullable()->default(NULL);
            $table->string('order_name')->nullable()->default('');
            $table->string('first_name')->nullable()->default('');
            $table->string('last_name')->nullable()->default('');
            $table->date('order_delivery')->nullable()->default(NULL);
            $table->string('address_first')->nullable()->default('');
            $table->string('address_last')->nullable()->default('');
            $table->string('address_code')->nullable()->default('');
            $table->string('address_name')->nullable()->default('');
            $table->string('order_remark')->nullable()->default('');
            $table->integer('order_static')->nullable()->default(1);
            $table->integer('order_total')->nullable()->default(0);
            $table->integer('pay_mothod')->nullable()->default(1)->comment('1:PATPAL / 2:DEBITCARD / 3:PAYONEER / 4:CASH');
            $table->integer('pay_static')->nullable()->default(2)->comment('1:付款完成 / 2:待付款 / 3:無付款 / 4:退款');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_deatails');
    }
};
