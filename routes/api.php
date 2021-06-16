<?php


use App\Models\Parameter;
use App\Models\Profile;
use App\Models\Permission;
use App\Models\PermisionProfile;
use App\Models\User;
use App\Models\Enterprice;
use App\Models\Receipt;



use Illuminate\Support\Facades\Route;

use App\Http\Resources\ParameterResource;
use App\Http\Resources\ProfileResource;
use App\Http\Resources\PermissionResource;
use App\Http\Resources\PermisionProfileResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\EnterpriceResource;
use App\Http\Resources\ReceiptResource;



use App\Http\Controllers\UserController;
use App\Http\Controllers\ReceiptController;


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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();
//});
Route::get('receipts','ReceiptController@index');
Route::get('receipts/{receipt}','ReceiptController@show');
Route::post('receipts','ReceiptController@store');
Route::put('receipts/{receipt}','ReceiptController@update');
Route::delete('receipts/{receipt}','ReceiptController@destroy');

Route::get('users','UserController@index');
Route::get('users/{user}','UserController@show');
Route::post('users','UserController@store');
Route::put('users/{user}','UserController@update');
Route::delete('users/{user}','UserController@destroy');
Route::post('auth','UserController@auth');