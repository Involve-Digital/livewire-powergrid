<?php

use Illuminate\Support\Facades\Route;
use PowerComponents\LivewirePowerGrid\Controllers\InjectController;

Route::name('powergrid.')->prefix('/__powergrid')->group(function () {
    Route::get('js', [InjectController::class, 'js'])->name('global.js');
});
