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
        Schema::create('category-post', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(category::class, 'category_id')->nullable()->constrained('categories')->cascadeOnDelete();
            $table->foreignIdFor(category::class, 'post_id')->nullable()->constrained('posts')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category-post');
    }
};
