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
            $table->id(); // AUTO_INCREMENT primary key
            $table->unsignedBigInteger('ep_id'); // Foreign key column
            $table->unsignedBigInteger('user_id'); // Foreign key column
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
        Schema::table('ECLC_INPUTS', function (Blueprint $table) {
            $table->dropForeign(['ep_id']); // Drop foreign key constraint for ep_id
            $table->dropForeign(['user_id']); // Drop foreign key constraint for user_id
        });

        Schema::dropIfExists('ECLC_INPUTS');
    }
};
