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
        Schema::create('survey_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('SurveyId');
            $table->timestamp('DateofResponse');
            $table->text('respuesta1')->nullable();
            $table->text('respuesta2')->nullable();
            $table->text('respuesta3')->nullable();
            $table->timestamps();

            $table->foreign('SurveyId')->references('id')->on('surveys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survey_results');
    }
};
