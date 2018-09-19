<?php

Route::group(['module' => 'Tags', 'middleware' => ['api'], 'namespace' => 'App\Modules\Tags\Controllers'], function() {

    Route::resource('Tags', 'TagsController');

});
