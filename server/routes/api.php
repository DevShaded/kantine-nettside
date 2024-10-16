<?php

declare(strict_types=1);

use App\Http\Controllers\Api\MenuController;

Route::get('/menus', [MenuController::class, 'index']);
Route::get('/menus/{menu:day_of_week}', [MenuController::class, 'show']);
