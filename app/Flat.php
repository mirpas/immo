<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flat extends Model
{
	use SoftDeletes;

    protected $fillable = [
		'building_id',
		'flat_type_id',
		'short_name',
		'description',
		'floor',
		'no_of_rooms',
		'din_area',
		'living_area',
		'heated_area',
		'useable_area',
		'balcony_area',
		'year_of_last_renovation',
		'built_in_kitchen',
		'weg_mieteigentumsanteil',
		'weg_kopfstimmen',
		'weg_hausgeld',
    ];

	/*
	 * Set default attribute values
	 */
	protected $attributes = [
		'built_in_kitchen' => 0
	];

	/*
	 * Get the type that belongs to the flat
	 */
	public function flatType()
	{
		return $this->belongsTo('App\FlatType');
	}

	/*
	 * Get the building that belongs to the flat
	 */
	public function building()
	{
		return $this->belongsTo('App\Building');
	}
}
