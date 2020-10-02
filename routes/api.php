<?php
    Route::apiResource('/question', 'QuestionController');
    Route::apiResource('/category', 'CategoryController');
    Route::apiResource('/question/{question}/reply', 'ReplyController');

    Route::POST('like/{reply}', 'LikeController@likeIt');
    Route::DELETE('like/{reply}', 'LikeController@unlikeIt');

    Route::group([
        'middleware' => 'api',
        // 'namespace' => 'App\Http\Controllers',
        'prefix' => 'auth'
    ], function ($router) {
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
    });
