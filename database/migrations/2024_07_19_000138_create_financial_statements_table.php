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
        Schema::create('financial_statements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ReceiptId'); 
            $table->datetime('Date'); 
            $table->decimal('Incomes',11, 2); 
            $table->decimal('Expenses',11, 2); 
            $table->decimal('Utilities',11, 2); 
            $table->string('Description',256)->nullable(); 
            $table->timestamps();

            $table->foreign('ReceiptId')->references('id')->on('purchase_orders')->onDelete('cascade'); 

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('financial_statements');
    }
};
