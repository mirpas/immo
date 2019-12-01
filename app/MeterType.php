<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MeterType extends Model
{
    use SoftDeletes;

	/*
	 * Get all meters for that meter type
	 */
	public function meters()
	{
		return $this->hasMany('App\Meter');
	}


}
