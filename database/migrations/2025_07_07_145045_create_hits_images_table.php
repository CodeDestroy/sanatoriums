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
        Schema::create('hits_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hit_id')->constrained('hits')->onDelete('cascade');
            $table->string('image_path'); // путь к картинке
            $table->integer('sort')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hits_images');
    }
};
