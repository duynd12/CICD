<?php

use App\Http\Controllers\TestController;
use App\Jobs\JobA;
use App\Jobs\JobB;
use App\Jobs\JobC;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TestController::class, 'index']);

Route::get('/test-queue', function () {
    $start = microtime(true);

    for ($i = 1; $i <= 1000; $i++) {
        JobA::dispatch($i);
    }

    $end = microtime(true);
    $time = $end - $start;
    logger($time);

    return "Dispatched Jobs A, B, C";
});
