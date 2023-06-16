<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class RacetrackRecord
 *
 * @property $race_id
 * @property $runner_id
 * @property $insurer_cif
 * @property $qr
 * @property $dorsal
 * @property $time
 * @property $points
 * @property $created_at
 * @property $updated_at
 *
 * @property Insurer $insurer
 * @property Race $race
 * @property Runner $runner
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RacetrackRecord extends Model
{
    
    static $rules = [
		'race_id' => 'required',
		'runner_dni' => 'required',
		'qr' => 'required',
		'dorsal' => 'required'
    ];

    protected $perPage = 20;

    protected $primaryKey = 'race_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['race_id','runner_dni','insurer_cif','qr','dorsal','time','points'];


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
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function runner()
    {
        return $this->hasOne('App\Models\Runner', 'dni', 'runner_dni');
    }
    

}
