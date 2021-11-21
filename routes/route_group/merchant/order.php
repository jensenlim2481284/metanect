<?php 

    # Transaction Order route 
    Route::group(['prefix' => 'order', 'as' => 'order.' ,'namespace'=>'Order'], function () {
        
        Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);

        # What's Next : Order processing function & order details
      
    });