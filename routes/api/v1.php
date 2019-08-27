<?php

Route::group(['prefix' => 'api', 'as' => 'api.', 'namespace' => 'Api'], function() {
  Route::group(['prefix' => 'v1', 'as' => 'v1.', 'namespace' => 'V1'], function() {

    Route::group(['middleware' => 'api.v1'], function() {


    });

  });
});
