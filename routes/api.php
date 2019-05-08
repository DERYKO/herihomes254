<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', function (Request $request){
    \Illuminate\Support\Facades\Validator::make($request->all(),[
        'name' => 'required',
        'password' => 'required'
    ]);
    $user = \App\User::where('name', $request->get('name'))->first();
    if ($user) {
        if (\Illuminate\Support\Facades\Hash::check($request->get('password'), $user->password) == false) {
            return response()->json(['message' => 'invalid password'], 401);
        } else {
            \Illuminate\Support\Facades\Auth::login($user);
            return response()->json(['message' => 'success'], 200);
        }

    } else {
        return response()->json(["message" => "User does not exists"],404);
    }
});
Route::post('/register','RegisterController@register');
Route::get('/properties-sale','PropertyController@forSale');
Route::get('users',function (){
   return response()->json([\App\User::all()->toJson()],200) ;
});
//mpesa routes
Route::post('/lipa-na-mpesa','MpesaController@lipa_na_mpesa');//stk push
