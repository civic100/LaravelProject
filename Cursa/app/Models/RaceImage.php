<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RaceImage
 *
 * @property $race_id
 * @property $race_image
 * @property $created_at
 * @property $updated_at
 *
 * @property Race $race
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class RaceImage extends Model
{
    use HasFactory;
    protected $table = 'race_images';
    static $rules = [
		'race_id' => 'required',
		'race_image' => 'required',
    ];

    protected $perPage = 20;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['race_id','race_image'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function race()
    {
        return $this->hasMany('App\Models\Race', 'id', 'race_id');
    }


}
