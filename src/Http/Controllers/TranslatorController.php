<?php

namespace Flatorb\Translator\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Google\Cloud\Translate\TranslateClient;

use Flatorb\Translator\Models\Translation;

class TranslatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$keys = Translation::with(['translations'])->where('parent', 0)->get();
    	
        return view('Translator::index', compact('keys'));
    }

    public function translateAllGoogle() {
	    $gTranslateClient = $this->gTranslateClient();
	    
	    $keys = Translation::with(['translations'])->where('parent', 0)->get();

	    foreach ($keys as $key) {
		    foreach(explode(",", config('translator.locale_list')) as $locale) {
		    	if ($key->translations->where('locale', $locale)->first()) {
				    if (empty($key->translations->where('locale', $locale)->first()->google)) {
					    $item = $key->translations->where('locale', $locale)->first();
						$item->google = $this->gTranslate($key->key, $locale, $gTranslateClient);
				    }
			    } else {
				    Translation::create([
				    	'parent' => $key->id,
					    'locale' => $locale,
					    'google' => $this->gTranslate($key->key, $locale, $gTranslateClient)
				    ]);
			    }
		    }
	    }
	    
	    return redirect(route('translator.index'));
	    
    }
    
    
    public function gTranslate($key, $locale, $client = NULL) {
    	if ($client == NULL) {
    		$gTranslateClient = $this->gTranslateClient();
	    } else {
		    $gTranslateClient = $client;
	    }
    	
    	$response = $gTranslateClient->translate($key, ['target' => $locale]);
    	
    	return $response['text'];
    }
    
    public function gTranslateClient() {
	    $translate = new TranslateClient([
		    'key' => config('translator.google_api_key')
	    ]);
	    
	    return $translate;
    }
}
