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
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return view('welcome');
});
/*
Route::get('/parameters','ParameterController@index');
Route::get('/parameters/{parametrer}','ParameterController@show');
Route::post('/parameters','ParameterController@store');
Route::put('/parameters/{parameter}','ParameterController@update');
Route::delete('/parameters/{parameter}','ParameterController@destroy');

Route::get('/profiles','ProfileController@index');
Route::get('/profiles/{profile}','ProfileController@show');
Route::post('/profiles','ProfileController@store');
Route::put('/profiles/{profile}','ProfileController@update');
Route::delete('/profiles/{profile}','ProfileController@destroy');

Route::get('/permissions','PermissionController@index');
Route::get('/permissions/{permission}','PermissionController@show');
Route::post('/permissions','PermissionController@store');
Route::put('/permissions/{permission}','PermissionController@update');
Route::delete('/permissions/{permission}','PermissionController@destroy');

Route::get('/permisionsProfiles','PermisionProfileController@index');
Route::get('/permisionsProfiles/{permisionProfile}','PermisionProfileController@show');
Route::post('/permisionsProfiles','PermisionProfileController@store');
Route::put('/permisionsProfiles/{permisionProfile}','PermisionProfileController@update');
Route::delete('/permisionsProfiles/{permisionProfile}','PermisionProfileController@destroy');
*/

/*
Route::get('/enterprices','EnterpriceController@index');
Route::get('/enterprices/{enterprice}','EnterpriceController@show');
Route::post('/enterprices','EnterpriceController@store');
Route::put('/enterprices/{enterprice}','EnterpriceController@update');
Route::delete('/enterprices/{enterprice}','EnterpriceController@destroy');

*/



//Auth::routes();

//Route::get('api/home', 'HomeController@index')->name('home');
