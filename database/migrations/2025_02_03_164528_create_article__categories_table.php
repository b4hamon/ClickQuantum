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
    Schema::create('article__categories', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('article_id');
        $table->unsignedBigInteger('category_id');

        $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article__categories');
    }
};
