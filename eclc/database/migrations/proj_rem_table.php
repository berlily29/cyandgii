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
        Schema::create('proj_rem', function (Blueprint $table) {
            $table->id('pr_id'); // AUTO_INCREMENT primary key for project reminder
            $table->unsignedBigInteger('user_id'); // Reference to user ID
            $table->unsignedBigInteger('project_id'); // Reference to project ID
            $table->unsignedBigInteger('eclc_id'); // Reference to eclc ID from ECLC_INPUTS table
            $table->string('project_remark', 255); // Column for project remarks, max length of 255 characters
            $table->timestamps(); // Adds created_at and updated_at timestamps

            // Add foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Foreign key to users table
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade'); // Foreign key to projects table
            $table->foreign('eclc_id')->references('eclc_id')->on('ECLC_INPUTS')->onDelete('cascade'); // Foreign key to ECLC_INPUTS table
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proj_rem');
    }
};
