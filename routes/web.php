<?php

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


Route::get('/create_role_permission', function () {

    $role = Role::create(['name' => 'Administer']);
    $permission = Permission::create(['name' => 'Administer roles & permissions']);

    auth()->user()->assignRole('Administer');
    auth()->user()->givePermissionTo('Administer roles & permissions');
});



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('posts', 'PostController');
