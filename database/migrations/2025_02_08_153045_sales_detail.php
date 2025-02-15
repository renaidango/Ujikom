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
        Schema::create('sales_detail', function (Blueprint $table) {
            $table->integer('sales_detail_id')->length(50);
            $table->integer('product_id')->length(50);
            $table->integer('sales_id')->length(50);
            $table->integer('user_id')->length(50);
            $table->integer('product_qty')->length(50);
            $table->decimal('subtotal')->length(10,2);
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
