<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\RecordController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Get al Employee
Route::get('accounts', [AccountController::class,'getAccount'])->name('getAccount');
//Add new Employee
Route::post('addAccount', [AccountController::class,'addAccount'])->name('addAccount');

//Update Employee
Route::put('updateAccount/{id}', [AccountController::class,'updateAccount'])->name('updateAccount');

//Delete Employee
Route::delete('deleteEmployee/{id}',[AccountController::class,'deleteAccount'])->name('deleteAccount');



//Get all transaction
Route::get('transactions', [TransactionController::class,'getTransaction'])->name('getTransaction');
//Create transaction
Route::post('createTransaction', [TransactionController::class,'createTransaction'])->name('createTransaction');


//Get all Record
Route::get('records', [RecordController::class,'getRecord'])->name('getRecord');
//Create Record
Route::post('createRecord', [RecordController::class,'createRecord'])->name('createRecord');






















// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::middleware(['cors','api'])->group(function () {
//     Route::post('createAccount', '[AccountController::class, 'createAccount']);
//     Route::get('Accounts', '[AccountController::class, 'createAccount'])->name('Account');
//     Route::put('post/{id}', 'PostController@update');
//     Route::delete('post/{id}', 'PostController@delete');
    
//     Route::post('comment', 'CommentController@create');
//     Route::put('comment/{id}', 'CommentController@update');
//     Route::delete('comment/{id}', 'CommentController@delete');
// });