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
        Schema::create('staff', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(DB::raw('(uuid_generate_v4())'));
            $table->uuid('user_id')->index();
            $table->string('lastname');
            $table->string('second_lastname')->nullable();
            $table->string('name');
            $table->string('precedence');
            $table->string('academy')->nullable();
            $table->string('altern_email')->nullable();
            $table->string('phone_number', 15)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
