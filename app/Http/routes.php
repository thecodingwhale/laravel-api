<?php

$api = app('Dingo\Api\Routing\Router');

// ['middleware' => 'api.auth'],

// Route::group(['as' => 'admin::'], function () {
//     Route::get('dashboard', ['as' => 'dashboard', function () {
//         // Route named "admin::dashboard"
//     }]);
// });

$api->version('v1', function ($api) {
// Route::group(['prefix' => 'admin'], function () {
//     Route::get('users', function ()    {
//         // Matches The "/admin/users" URL
//     });
// });

    $api->resource('user', 'App\LaravelApi\Api\V1\User\UserController@create');

    // $api->post('authenticate', 'App\Http\Controllers\AuthenticateController@authenticate');
    // $api->group(['middleware' => ['api.auth']], function ($api) {
    //     $api->get('users/{id}', 'App\Http\Controllers\UserController@show');
    // });

});