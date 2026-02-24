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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            
            $table->string('name' , length: 255)->nullable();
            $table->string('email', length: 30)->nullable();
            $table->string('phone' , length: 20)->nullable();
            $table->double('amount')->nullable();
            $table->text('address')->nullable();
            $table->string('status' , length: 10)->nullable();
            $table->string('transaction_id' , length: 255)->nullable();
            $table->string('currency' , length: 20)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
