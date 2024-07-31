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
        Schema::create('purchase_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserId');
            $table->string('Code',50);
            $table->string('Name',100);
            $table->decimal('Sale_Price', 11,2);
            $table->integer('Stock');
            $table->string('Description', 256)->nullable();
            $table->boolean('State')->default(1);
            $table->timestamps();

            $table->foreign('UserId')->references('id')->on('people')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_orders');
    }
};
