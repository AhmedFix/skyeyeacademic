<?php

use Illuminate\Support\Facades\Route;


Route::middleware([
    // 'localeSessionRedirect',
    // 'localizationRedirect',
    // 'localeViewPath',
    'auth',
    'role:admin|super_admin',
])
    ->group(function () {

        Route::name('admin.')->prefix('admin')->group(function () {

            //user routes
            Route::get('/users', 'UserController@index')->name('users.index');
           

        });

    });

