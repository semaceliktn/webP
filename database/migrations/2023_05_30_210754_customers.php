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
        Schema::create('customers',function (Blueprint $table){
            $table->id('customer_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('street_number')->nullable();
            $table->string('street_name')->nullable();
            $table->double('postal_code')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('phone_number')->nullable();
            $table->foreign('city_id')->references('city_id')->on('city');
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
