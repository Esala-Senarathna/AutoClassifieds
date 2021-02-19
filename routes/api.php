<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\BuyerRequestController;
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



Route::apiResource('/category', CategoryController::class);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/complaint',[ComplaintController::class,'create']);
Route::put('/complaint',[ComplaintController::class,'update']);
Route::get('/complaint',[ComplaintController::class,'getall']);
Route::post('/buyer_req',[BuyerRequestController::class,'createBuyerRequest']);
Route::get('/admin/Request',[BuyerRequestController::class,'displayAllRequest']);
Route::get('/admin/Request/{id}',[BuyerRequestController::class,'displayRequestById']);
Route::Put('/admin/Request/Reject/{id}',[BuyerRequestController::class,'rejectRequest']);
Route::Put('/admin/Request/Accept/{id}',[BuyerRequestController::class,'acceptRequest']);