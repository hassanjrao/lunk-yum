<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('plan_id')->constrained('plans');
            $table->foreignId('school_id')->constrained('schools');
            $table->string('payment_method');
            $table->string('payment_receipt');
            $table->date('starts_from');
            $table->date('ends_at');
            $table->decimal('discount_percentage',10,2);
            $table->decimal('total_price',10,3);

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
