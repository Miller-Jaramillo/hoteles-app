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
        Schema::create('hotel_files', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotels_id');
            $table->string('file_path');
            $table->enum('file_type', ['image', 'video']);
            $table->timestamps();
            $table->foreign('hotels_id')->references('id')->on('hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_files');
    }
};
