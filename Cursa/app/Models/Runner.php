<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Runner
 *
 * @property $dni
 * @property $name
 * @property $address
 * @property $birth_date
 * @property $federation
 * @property $num_federation
 * @property $created_at
 * @property $updated_at
 *
 * @property Placement $placement
 * @property RacetrackRecord $racetrackRecord
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Runner extends Model
{

    use HasFactory;

    static $rules = [
        'dni' => 'required',
		'name' => 'required',
        'sex' =>'required',
		'address' => 'required',
		'birth_date' => 'required',
		'federation' => 'required'
    ];

    protected $primaryKey = 'dni';

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['dni','name','sex','address','birth_date','federation','num_federation'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function placement()
    {
        return $this->hasOne('App\Models\Placement', 'runner_dni', 'dni');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function racetrackRecord()
    {
        return $this->hasOne('App\Models\RacetrackRecord', 'runner_dni', 'dni');
    }


}
