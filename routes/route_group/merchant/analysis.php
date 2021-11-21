<?php


    # Analysis route 
    Route::group(['prefix' => 'analysis' , 'as' => 'analysis.', 'namespace' => 'Analysis'], function () {

        Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

        # What's Next : Analysis details & analysis processing function

    });
