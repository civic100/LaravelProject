<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Insurer
 *
 * @property $cif
 * @property $name
 * @property $address
 * @property $price
 * @property $active
 * @property $created_at
 * @property $updated_at
 *
 * @property RacetrackRecord[] $racetrackRecords
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Insurer extends Model
{

  protected $primaryKey = "cif";
  protected $keyType = 'string';

    static $rules = [
		'cif' => 'required',
		'name' => 'required',
		'address' => 'required'
    ];

    protected $hidden = ['active'];
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cif','name','address','active'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function racetrackRecords()
    {
        return $this->hasMany('App\Models\RacetrackRecord', 'insurer_cif', 'cif');
    }



}
