<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Meter extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'meter_type_id',
    	'ident',
    	'unit',
    	'info',
    	'geeicht_am',
    	'photo',
    ];

	/*
	 * Set default attribute values
	 */
	protected $attributes = [

	];

	/*
	 * Get the type that belongs to the meter
	 */
	public function meterType()
	{
		return $this->belongsTo('App\MeterType');
	}

	/*
	 * Get the flats that belong to the meter
	 */
	public function flats()
	{
		return $this->belongsToMany('App\Flat')->withTimestamps();
	}
}
