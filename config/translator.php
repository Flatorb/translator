<?php

return [
	/**
	 *
	 */
	'primary_locale' => env('TRANSLATOR_PRIMARY_LOCALE', 'en'),
	
	
	/**
	 * This is the list of locale codes you need to translate to.
	 * Enter the list of locales as comma separated list in your .env file
	 */
	'locale_list' => env('TRANSLATOR_LOCALE_LIST', ''),
	
	
	/**
	 * Route prefix without any forward slashes (/) at the beginning or at the end
	 */
	'route_prefix' => env('TRANSLATOR_ROUTE_PREFIX', NULL)
];
