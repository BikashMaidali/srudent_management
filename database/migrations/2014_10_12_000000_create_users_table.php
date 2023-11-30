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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('usertype')->default(0);
            $table->string('student_no')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('associated_subject')->nullable();
            $table->string('staff_id')->nullable();
            $table->timestamp('email_verified_at')->nullable(
            );
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
