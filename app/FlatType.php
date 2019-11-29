<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FlatType extends Model
{
	use SoftDeletes;

	/*
	 * Get all flats for that flat type
	 */
	public function flats()
	{
		return $this->hasMany('App\Flat');
	}
}
