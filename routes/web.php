<?php

use App\Http\Controllers\FinancialReportController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/challenge', function () {
    return Inertia::render('Challenge');
})->name('challenge');

Route::get('/api/financial-report', [FinancialReportController::class, 'getFinancialReport'])
    ->name('api.financial-report');
