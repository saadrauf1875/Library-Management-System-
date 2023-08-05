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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
        
            $table->string('book_name');
            $table->string('book_category');
            $table->string('member_name');
            $table->string('member_id');
            $table->string('member_phone_no');
            $table->string('member_email');
            $table->string('member_address');
            $table->string('return_date');

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
