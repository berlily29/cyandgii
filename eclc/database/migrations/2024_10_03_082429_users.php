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
        Schema::create('ECLC_INPUTS', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ep_id', 11);
            $table->unsignedBigInteger('user_id', 11);
            $table->string('noe', 255);
            $table->date('date_not');
            $table->string('Type_PI',255);
            $table->string('noc', 255);
            $table->string('des_out', 255);
            $table->string('dop', 255);
            $table->string('tar_ben', 255);
            $table->string('wwp', 255);
            $table->date('expiry_date');
            $table->String('E_NE',255);
            $table->String('MOA',255);
            $table->String('Status',255);
            $table->timestamps();
            $table->softDeletes(); // Add this line for soft deletes

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ECLC_INPUTS', function (Blueprint $table) {
            $table->dropSoftDeletes(); // This removes the deleted_at column
        });
    }
};
