<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BuildingType extends Model
{
	use SoftDeletes;

	/*
	 * Get the buildings for that building type
	 */
	public function buildings()
	{
		return $this->hasMany('App\Building');
	}
}
