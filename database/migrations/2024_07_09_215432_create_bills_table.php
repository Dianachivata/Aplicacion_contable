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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ReceiptId');
            $table->string('Receipt_number', 10);
            $table->dateTime('Date');
            $table->string('Article');
            $table->decimal('Quantity');
            $table->decimal('Price',11, 2);
            $table->decimal('Tax', 4, 2);
            $table->decimal('Total', 11, 2);
            $table->timestamps();

            $table->foreign('ReceiptId')->references('id')->on('purchase_orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
