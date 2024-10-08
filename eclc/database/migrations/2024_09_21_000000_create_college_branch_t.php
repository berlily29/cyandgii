<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('college_branch_t', function (Blueprint $table) {
            // Set college_id as a unique string with a max length of 3
            $table->string('college_id', 3)->unique()->primary();
            $table->string('college_branch');
            $table->string('college_address');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('college_branch_t');
    }
};

