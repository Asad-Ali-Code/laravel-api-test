<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyApi;
use App\Http\Controllers\getApi;
use App\Http\Controllers\getApiwithParameter;
use App\Http\Controllers\addAPI;
use App\Http\Controllers\updateAPI;
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
Route::get("data",[dummyApi::class,'getData']);
Route::get("getapi",[getApi::class,'getApi']);
Route::get("apiwithpara/{name?}",[getApiwithParameter::class,'getApiwithPara']);
Route::post("addapi",[addAPI::class,'addAPI']);
Route::put("updateapi",[updateAPI::class,'updateAPI']);
Route::delete("deleteapi/{id}",[updateAPI::class,'deleteAPI']);
