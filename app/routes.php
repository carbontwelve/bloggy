<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('as' => 'home', 'uses' => 'App\Controllers\Frontend\PageController@home') );

Route::post('/search', array('as' => 'search', 'uses' => 'App\Controllers\Frontend\SearchController@find') );

Route::group(
    array('prefix' => 'administration'),
    function () {

        Route::get(
            '/dashboard',
            array
            (
                'as' => 'administration.dashboard',
                'uses' => 'App\Controllers\Backend\DashboardController@index'
            )
        );
    }
);

App::bind('Bloggy\Repositories\PageRepositoryInterface', 'Bloggy\Repositories\DbPageRepository');
