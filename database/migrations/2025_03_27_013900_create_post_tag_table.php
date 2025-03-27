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
        Schema::create('post_tag-', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(category::class, 'post_id')->nullable()->constrained('posts')->cascadeOnDelete();
            $table->foreignIdFor(category::class, 'tag_id')->nullable()->constrained('tags')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag-');
    }
};
