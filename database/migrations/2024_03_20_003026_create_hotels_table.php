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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('number_rooms')->nullable();
            $table->string('email')->nullable();
            $table->string('celphone_1')->nullable();
            $table->string('celphone_2')->nullable();
            $table->string('phone')->nullable();
            $table->string('extension')->nullable();
            $table->string('whatsapp_1')->nullable();
            $table->string('whatsapp_2')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('tiktok')->nullable();
            $table->text('description')->nullable();
            $table->string('photo_profile')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('slogan')->nullable();
            $table->string('final_slogan')->nullable();
            $table->enum('status', ['Abierto', 'Cerrado'])->default('Abierto');
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('department')->nullable();
            $table->string('city')->nullable();
            $table->integer('likes')->default(0);
            $table->integer('comments')->default(0);
            $table->timestamps();

            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::table('hotels', function (Blueprint $table) {
            // Eliminar la relación con la tabla "users"
            $table->dropForeign(['user_id']);

        });

        Schema::dropIfExists('hotels');


    }
};
