<?php

use App\Http\Controllers\Wallet\CreateWalletController;
use App\Http\Controllers\Wallet\GetAllWalletsController;
use App\Http\Controllers\Wallet\GetSingleWalletController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/wallets', [GetAllWalletsController::class, 'execute']);
Route::get('/wallets/{id}', [GetSingleWalletController::class, 'execute']);
Route::post('/wallets', [CreateWalletController::class, 'execute']);

