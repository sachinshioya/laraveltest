<?php

Route::group(['module' => 'Tags', 'middleware' => ['web'], 'namespace' => 'App\Modules\Tags\Controllers'], function() {

    Route::resource('Tags', 'TagsController');

});
