<?php
if (config('translator.route_prefix')) {
	$prefix = config('translator.route_prefix') . '/translator';
} else {
	$prefix = 'translator';
}


Route::group(['as' => 'translator.', 'prefix' => $prefix], function() {
	Route::get('/', 'Flatorb\Translator\Http\Controllers\TranslatorController@index')->name('index');
	Route::get('import', 'Flatorb\Translator\Http\Controllers\ImportController@index')->name('import');
	Route::get('translate/all/google', 'Flatorb\Translator\Http\Controllers\TranslatorController@translateAllGoogle')->name('translate.all.google');
});
