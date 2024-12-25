<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
});

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('about',[HomeController::class, 'about'])->name('about');
Route::get('services',[HomeController::class, 'services'])->name('services');

    Route::get('home-health-and-qa',[HomeController::class, 'home_health_and_qa'])->name('home-health-and-qa');
    Route::get('hospice-coding-and-qa',[HomeController::class, 'hospice_coding_and_qa'])->name('hospice-coding-and-qa');
    Route::get('clinical-administrative',[HomeController::class, 'clinical_administrative'])->name('clinical-administrative');
    Route::get('revenue-cycle-management',[HomeController::class, 'revenue_cycle_management'])->name('revenue-cycle-management');
    Route::get('care-management',[HomeController::class, 'care_management'])->name('care-management');
    Route::get('hospice-billing',[HomeController::class, 'hospice_billing'])->name('hospice-billing');
    Route::get('home-health-billing',[HomeController::class, 'home_health_billing'])->name('home-health-billing');    


Route::get('insights',[HomeController::class, 'insights'])->name('insights');
Route::get('insights-1',[HomeController::class, 'insights_1'])->name('insights-1');
Route::get('careers',[HomeController::class, 'careers'])->name('careers');
Route::get('partner-with-us',[HomeController::class, 'partner_with_us'])->name('partner-with-us');
Route::get('privacy-policy',[HomeController::class, 'privacy_policy'])->name('privacy-policy');





