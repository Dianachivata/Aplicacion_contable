<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillController;
use App\Http\Controllers\FinancialStatementController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\PurchaseOrderController;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\SurveyResultController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/dashboard/bill',BillController::class);
    Route::resource('/dashboard/financial_statement',FinancialStatementController::class);
    Route::resource('/dashboard/person',PersonController::class);
    Route::resource('/dashboard/purchase_order',PurchaseOrderController::class);
    Route::resource('/dashboard/survey',SurveyController::class);
    Route::resource('/dashboard/survey_result',SurveyResultController::class);
});

require __DIR__.'/auth.php';
