<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VirtualminController;

Route::get('/virtualmin/domains', [VirtualminController::class, 'listDomains']);
