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

Route::get('/', 'IndexController@index');

// name нужен для формировании ссылки на отдельную статью при отображении спика всех статей
Route::get('article/{id}', 'IndexController@show')->name('articleShow');

Route::get('page/add', 'IndexController@add');

// name нужен для того чтобы потом обращаться к немиу при обработке формы
Route::post('page/add', 'IndexController@store')->name('articleStore');