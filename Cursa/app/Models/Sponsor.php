<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sponsor
 *
 * @property $cif
 * @property $name
 * @property $logo
 * @property $address
 * @property $email
 * @property $home
 * @property $total
 * @property $active
 * @property $created_at
 * @property $updated_at
 *
 * @property RacetrackRecord[] $racetrackRecords
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sponsor extends Model
{
    protected $primaryKey = "cif";
    protected $keyType = 'string';

    static $rules = [
		'cif' => 'required',
		'name' => 'required',
		'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		'address' => 'required',
		'email' => 'required',
		'home' => 'required'
    ];

    protected $hidden = ['active'];
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cif','name','logo','address','email','home','active'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function racetrackRecords()
    {
        return $this->hasMany('App\Models\RacetrackRecord', 'sponsor_cif', 'cif');
    }
   /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function raceSponsor()
    {
        return $this->hasMany('App\Models\RaceSponsor', 'race_id', 'id');
    }

  }
