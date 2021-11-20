<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Contact;

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

Route::get('posts', function(){
    return Post::all();
});

Route::get('contacts', function(){
    return Contact::all();
});

Route::post('contacts', function(Request $request) {
    return Contact::create($request->all);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
