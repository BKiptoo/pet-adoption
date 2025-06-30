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
        Schema::create('adoption_applications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('slug')->unique(); // Unique slug for URL
            $table->uuid('user_id');
            $table->uuid('pet_id');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->string('applicant_name');
            $table->string('applicant_email');
            $table->string('applicant_phone')->nullable();
            $table->text('address')->nullable();
            $table->text('reason')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->softDeletes(); // For soft deletion
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adoption_applications');
    }
};
