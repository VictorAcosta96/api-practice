<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExternalApiController;

Route::resource('/external-users', ExternalApiController::class);
