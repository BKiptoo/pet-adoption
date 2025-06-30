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
        Schema::create('pets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('slug')->unique(); // Unique slug for URL
            $table->string('species'); // e.g., Dog, Cat
            $table->string('breed')->nullable();
            $table->integer('age')->nullable(); // Age in months
            $table->enum('gender', ['male', 'female', 'unknown'])->default('unknown');
            $table->text('description')->nullable();
            $table->enum('status', ['available', 'adopted', 'pending'])->default('available');
            $table->string('image')->nullable(); // Path to pet image
            $table->uuid('shelter_id');
            $table->softDeletes(); // For soft deletion
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pets');
    }
};
