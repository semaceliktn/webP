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
        Schema::create('orderitem',function (Blueprint $table){
            $table->id('order_id');
            $table->unsignedBigInteger('book_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->double('price')->nullable();
            $table->foreign('order_id')->references('order_id')->on('orders');
            $table->foreign('book_id')->references('book_id')->on('orderitem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
