<?php

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
    return view('index');
});

Route::get('/register', 'VotersController@register');

Route::get('/search', 'VotersController@search');

Route::post('/results', 'VotersController@results');

Route::post('/store', 'VotersController@store');

Route::get('/photo/{id}', function($id){
    $voter = App\Voter::find($id);
        return response()->make($voter->photo, 200, array(
            'Content-Type' => (new finfo(FILEINFO_MIME))->buffer($voter->photo)
        ));
});

Route::get('/id/{id}', 'VotersController@getId');

Route::fallback(function() {
    return redirect('/');
});