<?php

use Illuminate\Support\Facades\Route;
use Jishadp\SaasLeadModule\Controllers\LeadController;

Route::get('leads', [LeadController::class,'index']);
