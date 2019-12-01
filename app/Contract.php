<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'flat_id',
        'start_date',
        'end_date',
        'notice_period',
        'unterschrift',
    ];

    /*
     * Get the contacts that belong to the contract
     */
    public function contacts()
    {
        return $this->belongsToMany('App\Contact')->withTimestamps();
    }

    /*
     * Get the flat that belongs to the contract
     */
    public function flat()
    {
        return $this->belongsTo('App\Flat');
    }
}
