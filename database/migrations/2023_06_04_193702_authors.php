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
        Schema::create('authors',function (Blueprint $table){
            $table->id('author_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
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
