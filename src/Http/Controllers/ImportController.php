<?php

namespace Flatorb\Translator\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Flatorb\Translator\Models\Translation;

class ImportController extends Controller
{
    public function index()
    {
	    $defaultLocale = 'en';
	    
    	$defaultLocaleJsonPath = resource_path("lang/{$defaultLocale}.json");
    	
    	$defaultFileContent = file_get_contents($defaultLocaleJsonPath);
	
	    $defaultContents = json_decode($defaultFileContent, TRUE);
	    
    	foreach ($defaultContents as $key => $value) {
		    Translation::updateOrCreate([
		    	'locale' => $defaultLocale,
			    'key' => $key
		    ], [
		    	'value' => $value
		    ]);
	    }
    	
        return view('Translator::import', compact('defaultContents'));
    }
}
