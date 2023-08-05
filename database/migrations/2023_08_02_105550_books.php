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
        //
        Schema::create('books', function (Blueprint $table) {
            $table->id();
    
            $table->string('book_name');
            $table->string('book_category');
            $table->string('book_author');
            $table->string('rack_no');
            $table->string('book_edition');
            $table->string('date_of_publication');
            $table->string('book_publisher');
            $table->string('book_status');


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
