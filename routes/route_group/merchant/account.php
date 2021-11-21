<?php

# Account Route
Route::group(['prefix' => 'account', 'as' => 'account.', 'namespace' => 'Account'], function () {

    # Credit group 
    Route::group(['prefix' => 'credit', 'as' => 'credit.'], function () {

        Route::get('/', ['as' => 'index', 'uses' => 'CreditController@index']);

        # What's Next : Topup function 

        # What's Next : Withdrawal function 

        # What's Next : Bank Management function 

    });

});
