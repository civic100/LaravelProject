<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class RaceInsurer
 *
 * @property $race_id
 * @property $insurer_cif
 * @property $price
 * @property $created_at
 * @property $updated_at
 *
 * @property Insurer $insurer
 * @property Race $race
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RaceInsurer extends Model
{
    
    static $rules = [
		'race_id' => 'required',
		'insurer_cif' => 'required',
		'price' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['race_id','insurer_cif','price'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function insurer()
    {
        return $this->hasOne('App\Models\Insurer', 'cif', 'insurer_cif');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function race()
    {
        return $this->hasOne('App\Models\Race', 'id', 'race_id');
    }
    

}
