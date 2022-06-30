<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('helloworld');
});

Route::get('view-characters', [CharacterController::class, 'index'])->middleware(('testred'));
Route::get('show-character/{id}', [CharacterController::class, 'show'])->middleware(('testred'));;
Route::get('add-character-form', [CharacterController::class, 'add']);
Route::post('store-character-form', [CharacterController::class, 'store'])
->middleware(('empty'));
Route::get('redirects/{id}')->middleware(('testred'));