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

App::bind('Bloggy\Repositories\PageRepositoryInterface', 'Bloggy\Repositories\DbPageRepository');

/**************** NEW ROUTES BELOW THIS LINE - TEST ONES ABOVE ******************/

/**
 *     _       _           _         ____             _
 *    / \   __| |_ __ ___ (_)_ __   |  _ \ ___  _   _| |_ ___  ___
 *   / _ \ / _` | '_ ` _ \| | '_ \  | |_) / _ \| | | | __/ _ \/ __|
 *  / ___ \ (_| | | | | | | | | | | |  _ < (_) | |_| | ||  __/\__ \
 * /_/   \_\__,_|_| |_| |_|_|_| |_| |_| \_\___/ \__,_|\__\___||___/
 *
 */

Route::group(
    array('prefix' => 'administration'),
    function () {

        Route::group(
            array('prefix' => 'network'),
            function () {
                Route::get('/', array('as' => 'administration.network.index', 'uses' => 'App\Controllers\Backend\NetworkAdminController@index'));
                Route::get('/', array('as' => 'administration.network.add', 'uses' => 'App\Controllers\Backend\NetworkAdminController@add'));
            }
        );

        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //  _____
        // |_   _|_ ___  _____  _ __   ___  _ __ ___  _   _
        //   | |/ _` \ \/ / _ \| '_ \ / _ \| '_ ` _ \| | | |
        //   | | (_| |>  < (_) | | | | (_) | | | | | | |_| |
        //   |_|\__,_/_/\_\___/|_| |_|\___/|_| |_| |_|\__, |
        //                                            |___/
        //
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        Route::group(
            array('prefix' => 'taxonomy'),
            function () {

                ////////////////////////////////////////////////////////////////////////////////////////////////////////
                //  _____                                     _        _   _       _ _
                // |_   _|_ ___  _____  _ __   ___  _ __ ___ (_) ___  | | | |_ __ (_) |_ ___
                //   | |/ _` \ \/ / _ \| '_ \ / _ \| '_ ` _ \| |/ __| | | | | '_ \| | __/ __|
                //   | | (_| |>  < (_) | | | | (_) | | | | | | | (__  | |_| | | | | | |_\__ \
                //   |_|\__,_/_/\_\___/|_| |_|\___/|_| |_| |_|_|\___|  \___/|_| |_|_|\__|___/
                //
                ////////////////////////////////////////////////////////////////////////////////////////////////////////
                Route::group(
                    array('prefix' => 'units'),
                    function () {

                        Route::get('/', array('as' => 'administration.taxonomy.units.index', 'uses' => 'App\Controllers\Backend\TaxonomicUnitAdminController@index'));
                        Route::get('/add', array('as' => 'administration.taxonomy.units.add', 'uses' => 'App\Controllers\Backend\TaxonomicUnitAdminController@add'));
                        Route::post('/create', array('as' => 'administration.taxonomy.units.create', 'uses' => 'App\Controllers\Backend\TaxonomicUnitAdminController@create'));
                        Route::get('/{id}/edit', array('as' => 'administration.taxonomy.units.edit', 'uses' => 'App\Controllers\Backend\TaxonomicUnitAdminController@edit'));
                        Route::post('/{id}/edit', array('as' => 'administration.taxonomy.units.update', 'uses' => 'App\Controllers\Backend\TaxonomicUnitAdminController@update'));
                        Route::post('/{id}/destroy', array('as' => 'administration.taxonomy.units.destroy', 'uses' => 'App\Controllers\Backend\TaxonomicUnitAdminController@destroy'));

                    }
                );

                ////////////////////////////////////////////////////////////////////////////////////////////////////////
                //  _____
                // |_   _|_ ___  _____  _ __  ___
                //   | |/ _` \ \/ / _ \| '_ \/ __|
                //   | | (_| |>  < (_) | | | \__ \
                //   |_|\__,_/_/\_\___/|_| |_|___/
                //
                ////////////////////////////////////////////////////////////////////////////////////////////////////////
                Route::group(
                    array('prefix' => 'taxons'),
                    function () {

                        Route::get('/', array('as' => 'administration.taxonomy.taxons.index', 'uses' => 'App\Controllers\Backend\TaxonsAdminController@index'));
                        Route::get('/add', array('as' => 'administration.taxonomy.taxons.add', 'uses' => 'App\Controllers\Backend\TaxonsAdminController@add'));
                        Route::post('/create', array('as' => 'administration.taxonomy.taxons.create', 'uses' => 'App\Controllers\Backend\TaxonsAdminController@create'));
                        Route::get('/{id}/edit', array('as' => 'administration.taxonomy.taxons.edit', 'uses' => 'App\Controllers\Backend\TaxonsAdminController@edit'));
                        Route::post('/{id}/edit', array('as' => 'administration.taxonomy.taxons.update', 'uses' => 'App\Controllers\Backend\TaxonsAdminController@update'));
                        Route::post('/{id}/destroy', array('as' => 'administration.taxonomy.taxons.destroy', 'uses' => 'App\Controllers\Backend\TaxonsAdminController@destroy'));

                    }
                );

                ////////////////////////////////////////////////////////////////////////////////////////////////////////
                // Taxonomy
                ////////////////////////////////////////////////////////////////////////////////////////////////////////

            }
        );



        Route::group(
            array('prefix' => 'content'),
            function () {

            }
        );

    }
);
