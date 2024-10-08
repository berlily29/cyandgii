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
            $table->id('eclc_id'); // AUTO_INCREMENT primary key
            $table->unsignedBigInteger('user_id'); // Foreign key column
            $table->unsignedBigInteger('pr_id'); // Foreign key column for proj_rem

            $table->string('in_charge'); // Column for "In Charge" name
            $table->string('college_id', 3); // Foreign key to reference college/branch campus
            $table->string('noe'); // VARCHAR column
            $table->date('date_not'); // DATE column
            $table->string('Type_PI'); // VARCHAR column
            $table->string('noc'); // VARCHAR column
            $table->string('des_out'); // VARCHAR column
            $table->string('dop'); // VARCHAR column
            $table->string('tar_ben'); // VARCHAR column
            $table->string('wwp'); // VARCHAR column
            $table->date('expiry_date'); // DATE column
            $table->string('E_NE'); // VARCHAR column
            $table->string('MOA'); // VARCHAR column
            $table->string('Status'); // VARCHAR column
            $table->timestamps(); // created_at and updated_at columns
            $table->softDeletes(); // deleted_at column for soft deletes

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ECLC_INPUTS');
    }
};
