<?php


    # Promotion route 
    Route::group(['prefix' => 'promotion'  , 'as' => 'promotion.', 'namespace' => 'Promotion'], function () {

        Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

        # What's Next : Product Discount function 
        # What's Next : Promo code function 

    });
