<?php
if (config('translator.route_prefix')) {
	$prefix = config('translator.route_prefix') . '/translator';
} else {
	$prefix = 'translator';
}


Route::group(['as' => 'translator.', 'prefix' => $prefix], function() {
	Route::get('/', 'Flatorb\Translator\Http\Controllers\TranslatorController@index')->name('index');
});
