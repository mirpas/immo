<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    	protected $fillable = ['short_name', 'description', 'street', 'zip', 'city', 'flurnummer', 'ground_area', 'building_area', 'year_of_construction', 'year_of_last_renovation', 'path_to_energieausweis', 'building_type_id'];

    	// default attribute values
	protected $attributes = [
	        'building_type_id' => 1, // nur zu Testzwecken
	    ];

}
