<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Race
 *
 * @property $id
 * @property $description
 * @property $ramp
 * @property $max_participants
 * @property $race_price
 * @property $km
 * @property $date
 * @property $hour
 * @property $starting_point
 * @property $maps_image
 * @property $promotional_poster
 * @property $sponsor_price
 * @property $active
 * @property $created_at
 * @property $updated_at
 *
 * @property Raceimage $raceimage
 * @property RacetrackRecord[] $racetrackRecords
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Race extends Model
{
    use HasFactory;

    static $rules = [
        'name'=>'required',
		'description' => 'required',
		'ramp' => 'required',
		'max_participants' => 'required',
        'race_price' => 'required',
		'km' => 'required',
		'date' => 'required',
		'hour' => 'required',
		'starting_point' => 'required',
		'maps_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		'promotional_poster' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		'sponsor_price' => 'required'
    ];

    protected $hidden = ['active'];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id','name','description','ramp','max_participants','race_price','km','date','hour','starting_point','maps_image','promotional_poster','sponsor_price','active'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function raceimage()
    {
        return $this->hasMany('App\Models\RaceImage', 'race_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function racetrackRecords()
    {
        return $this->hasMany('App\Models\RacetrackRecord', 'race_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function raceInsurer()
    {
        return $this->hasMany('App\Models\RaceInsurer', 'race_id', 'id');
    }

      /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function raceSponsor()
    {
        return $this->hasMany('App\Models\RaceSponsor', 'race_id', 'id');
    }

}
