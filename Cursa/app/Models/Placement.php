<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Placement
 *
 * @property $runner_dni
 * @property $points
 * @property $created_at
 * @property $updated_at
 *
 * @property Runner $runner
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Placement extends Model
{
    
    static $rules = [
		'runner_dni' => 'required',
		'points' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['runner_dni','points'];

    protected $primaryKey = "runner_dni";

    protected $keyType = 'string';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function runner()
    {
        return $this->hasMany('App\Models\Runner', 'dni', 'runner_dni');
    }
    

}
