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

	/*
	 * Get the meters that belong to the flat
	 */
	public function meters()
	{
		return $this->belongsToMany('App\Meter')->withTimestamps();
	}

    /*
     * Get the contact from the owner of the flat (WEG)
     */
    public function contact()
    {
        return $this->belongsTo('App\Contact');
    }

    /*
     * Get all contracts for that flat
     */
    public function contracts()
    {
        return $this->hasMany('App\Contract');
    }
}
