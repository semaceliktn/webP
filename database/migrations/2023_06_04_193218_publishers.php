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
        Schema::table('publishers',function (Blueprint $table){
            $table->id('publisher_id');
            $table->string('country')->nullable();
            $table->unsignedBigInteger('book_id')->nullable();
            $table->foreign('book_id')->references('book_id')->on('books');
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