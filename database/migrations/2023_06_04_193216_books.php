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
        Schema::create('books',function (Blueprint $table){
            $table->id('book_id');
            $table->integer('author_id')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->string('title')->nullable();
            $table->string('ısbn')->nullable();
            $table->string('genre')->nullable();
            $table->date('publication_year')->nullable();
            $table->double('price')->nullable();
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
