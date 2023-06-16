<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RaceSponsor
 *
 * @property $race_id
 * @property $sponsor_cif
 * @property $created_at
 * @property $updated_at
 *
 * @property Sponsor $sponsor
 * @property Race $race
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RaceSponsor extends Model
{

    static $rules = [
		'race_id' => 'required',
		'sponsor_cif' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['race_id','sponsor_cif'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sponsor()
    {
        return $this->hasOne('App\Models\Sponsor', 'cif', 'sponsor_cif');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function race()
    {
        return $this->hasOne('App\Models\Race', 'id', 'race_id');
    }


}
