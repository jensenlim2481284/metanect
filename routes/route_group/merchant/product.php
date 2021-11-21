<?php

    # Product Management Route
    Route::group(['prefix' => 'product', 'as' => 'product.', 'namespace'=>'Product'], function () {

        Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

        # What's Next : Product CUD
        # What's Next : Product Import 
        # What's Next : Product Category management

    });
