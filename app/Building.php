<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
	use SoftDeletes;

    protected $fillable = [
    	'short_name',
    	'description',
    	'street',
    	'zip',
    	'city',
    	'flurnummer',
    	'no_of_floors',
    	'din_area',
    	'heated_area',
    	'useable_area',
    	'ground_area',
    	'year_of_construction',
    	'year_of_last_renovation'
    ];

	/*
	 * Set default attribute values
	 */
	protected $attributes = [
		'building_type_id' => 1, // nur zu Testzwecken
	];

	/*
	 * Get the BuildingType that belongs to the Building
	 */
	public function buildingType()
	{
		return $this->belongsTo('App\BuildingType');
	}
}
