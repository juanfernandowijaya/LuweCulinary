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

use Spatie\Permission\Models\Role;
// Route::get('/', function () {
//     return view('test');
// });
Route::get('/', 'HomeController@index');
// Route::get('/', function () {
//     //auth()->user()->assignRole('admin');
//     //auth()->user()->removeRole('admin');
//     //auth()->user()->syncRoles(['admin', 'user']);
//     //if (auth()->user()->hasRole('admin')) {
//     //     return 'Admin';
//     //}
//     //$user->givePermissionTo('edit post');
//     //dd($user->hasPermissionTo('delete post'));

//     //memberi permission pada role
//     // $role = Role::find(1);
//     // $role->givePermissionTo('add post', 'edit post', 'delete post', 'view post');

//     //cek apakah user bisa mengakses  edit post
// $user = auth()->user();
//$role = Role::find(1);
// $role->givePermissionTo('view post');
// dd($user->can('view post'));
// });
Route::get('/home', 'HomeController@index');
Route::get('/login', 'UserAuth@index')->middleware('CekLogin');
Route::post('/login', 'UserAuth@login');
Route::get('/register', 'UserAuth@IndexRegister');
Route::post('/register', 'UserAuth@SubmitRegister');
Route::get('/account', 'Account@Index')->middleware('CekLogin');

Route::get('/admin', 'AdminController@index');
//route group
// Route::middleware('role:admin')->group(function () {
//     //routing yang menggunakan middleware sama bisa dijadikan satu

// });



// Route::get('/account', function(){
//     if(auth()->user()->hasRole('admin'))


// });
Route::get('/account/test', 'Account@test');
Route::get('/logout', 'UserAuth@logout');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
