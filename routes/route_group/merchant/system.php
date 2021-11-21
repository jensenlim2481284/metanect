<?php

    # Store route 
    Route::group(['prefix' => 'store', 'as' => 'store.', 'namespace' => 'Store'], function () {

        Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
          
        # What's Next : Update general setting function
        
        # What's Next : Announcement mangement function         
        
        # What's Next : Shipping management function
        
        # What's Next : Page builder function
        
        # What's Next : Staff management function

        # What's Next : Goal management function
        
    });
