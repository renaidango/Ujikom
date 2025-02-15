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
        Schema::create('monthly_report', function (Blueprint $table) {
            $table->integer('monthly_report_id')->length(50);
            $table->decimal('sales_total')->length(10,2);
            $table->date('date');
            $table->string('casheer_name')->length(255);
            $table->integer('user_id')->length(50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
