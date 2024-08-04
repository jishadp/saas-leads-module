<?php

use Illuminate\Support\Facades\Route;
use Jishadp\SaasLeadModule\Controllers\LeadController;

Route::controller(LeadController::class)->middleware(['web','auth','setdb_middleware'])->name('saas.leads.')->prefix('leads')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('new','new')->name('new');
    Route::post('save','save')->name('save');
});

