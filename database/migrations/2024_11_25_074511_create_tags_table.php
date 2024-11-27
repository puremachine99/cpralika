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
        Schema::create('tags', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name'); // Nama tag
            $table->string('slug')->unique(); // Slug untuk URL-friendly
            $table->timestamps(); // created_at dan updated_at
        });

        // Pivot table untuk hubungan many-to-many antara news dan tags
        Schema::create('news_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->constrained('news')->onDelete('cascade'); // Relasi ke tabel news
            $table->foreignId('tag_id')->constrained('tags')->onDelete('cascade'); // Relasi ke tabel tags
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_tags'); // Hapus pivot table lebih dulu
        Schema::dropIfExists('tags'); // Hapus tabel tags
    }
};
