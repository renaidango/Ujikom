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
            $table->integer('user_id')->length(50);
            $table->string('casheer_name')->length(255);
            $table->enum('roles',['admin','user'])->default('user');
            $table->string('email')->length(255);
            $table->integer('phone')->length(15);
            $table->date('birth_date');
            $table->string('address')->length(255);
            $table->rememberToken();
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
