<?php

use Workup\Nova\CommandRunner\Http\Controllers\CommandsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::controller(CommandsController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/run', 'run');
});
