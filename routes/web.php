<?php

use App\Member;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware("auth")->group(function () {
    Route::get('/create-token', function () {
        $user = auth()->user();

        // 이 Plain 토큰을 잘 간직해야한다. 발급할 때 1회만 보여주고 해쉬값이 DB에 저장되기 때문
        $token = $user->createToken('android-token')->plainTextToken;
        return $token;
    });

    Route::get('/get-token', function () {
        $user = auth()->user();
        $token = $user->tokens()->first();

        return $token->plainTextToken;
    });
});

Route::get('/custom-user', function () {
    $user = Member::find('72');
    return $user;
});

Route::get('/custom-user/create-token', function () {
    $memberId = 72;
    $user = Member::find($memberId);

    // 신규 토큰을 발급 받기 전에 모든 토큰을 삭제
    $user->tokens()->delete();
    $token = $user->createToken('android-token')->plainTextToken;
    $user->api_token = $token;
    $user->save();
    return $token;
});

Route::get('/custom-user/test', function () {
    return strlen("qdVDlmINSG6LVNfq1sHmXdmI6egqWLKVZq8t7DMrqQfF4Yq9KknhvRgYYmVYVgpd7ros2oNX3mD1xVYg");
});

Route::get('/custom-user/login', function (Request $req) {
    $id = "test";
    $password = "test";
    $hashedPassword = DB::select(DB::raw("SELECT password('$password')"));

    return $hashedPassword;
});
