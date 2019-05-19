<?php

namespace Flatorb\Translator\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
	protected $dates = ['created_at', 'updated_at', 'deleted_at'];
	
	protected $guarded = [];
	
	public function translations() {
		return $this->hasMany('Flatorb\Translator\Models\Translation', 'parent', 'id');
	}
}
