<?php
    Route::apiResource('/question', 'QuestionController');
    Route::apiResource('/category', 'CategoryController');
    Route::apiResource('/question/{question}/reply', 'ReplyController');

    Route::POST('like/{reply}', 'LikeController@likeIt');
    Route::DELETE('like/{reply}', 'LikeController@unlikeIt');
