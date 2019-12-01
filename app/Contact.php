<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'building_id',
        'flat_id',
        'company',
        'company_extra',
        'company_ceo',
        'prename',
        'surname',
        'birth_name',
        'gender',
        'nationality',
        'day_of_birth',
        'phone',
        'mobile',
        'email',
        'iban',
        'bic',
        'tax_id',
        'street',
        'street_extra',
        'zip',
        'city',
        'country',
    ];

    /*
     * Get all buildings for that owner
     */
    public function buildings()
    {
        return $this->hasMany('App\Building');
    }

    /*
     * Get all flats for that owner (WEG)
     */
    public function flats()
    {
        return $this->hasMany('App\Flat');
    }

    /*
     * Get the contracts that belong to the contact
     */
    public function contracts()
    {
        return $this->belongsToMany('App\Contract')->withTimestamps();
    }
}
