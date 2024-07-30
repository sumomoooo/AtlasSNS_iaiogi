<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

// 対象画面： トップページ、プロフィール編集ページ、ユーザー検索ページ、フォローリストページ、フォロワーリストページ、相手ユーザーのプロフィールページ
// 作業内容：
// ■対象ページをログイン中のみ表示できるように制限をかける。
// ■ログアウト中に対象ページを表示しようとした場合、ログインページへ遷移するように設定する。
// ■今回はミドルウェアを用いて実装する。

//ログイン前の処理　以下の処理しかできない

// Route::group(['middleware' => 'guest'], function () {
//ログアウト中のページ
Route::get('/login', 'Auth\LoginController@login');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/register', 'Auth\RegisterController@register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/added', 'Auth\RegisterController@added');
Route::post('/added', 'Auth\RegisterController@added');
// ログインする
Route::get('/', 'Auth\LoginController@login')->name('login');
Route::post('/top', 'Auth\LoginController@login')->name('login');
// });


//ログイン後の処理　以下の処理しかできない
Route::group(['middleware' => 'auth'], function () {
  //ログイン中のページ
  Route::get('/top', 'PostsController@index');

  Route::get('/profile', 'UsersController@profile')->name('profile');

  Route::get('/search', 'UsersController@index');

  Route::get('/follow-list', 'PostsController@index');
  Route::get('/follower-list', 'PostsController@index');

  Route::post('/profile/update', 'ProfileController@update')->name('profile_update');

  // Route::post('/search', 'UsersController@index');
  Route::post('/search', 'UsersController@search');

  // 新規投稿
  Route::post('/submit', 'PostsController@submit')->name('submit');


  // ログアウトする
  Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


});

// Route::get('home', function () {
//   return view('home');
// })->name('home');
