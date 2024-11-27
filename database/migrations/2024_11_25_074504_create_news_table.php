<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content'); // Isi artikel
            $table->text('excerpt')->nullable(); // Ringkasan artikel
            $table->string('featured_image')->nullable(); // Gambar utama
            $table->foreignId('author_id')->constrained('users')->onDelete('cascade'); // Foreign Key ke users
            $table->boolean('is_published')->default(false); // Status publish
            $table->timestamp('published_at')->nullable(); // Tanggal publish
            $table->timestamps(); // created_at, updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
