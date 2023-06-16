<?php

namespace App\Observers;

use App\Models\RacetrackRecord;
use App\Models\Placement;

class RacetrackRecordObserver
{
    /**
     * Handle the RacetrackRecord "created" event.
     *
     * @param  \App\Models\RacetrackRecord  $racetrackRecord
     * @return void
     */
    public function created(RacetrackRecord $racetrackRecord)
    {
        //
    }

    /**
     * Handle the RacetrackRecord "updated" event.
     *
     * @param  \App\Models\RacetrackRecord  $racetrackRecord
     * @return void
     */
    public function updated(RacetrackRecord $racetrackRecord)
    {
        if($placement = Placement::find($racetrackRecord->runner_dni)){
            $placement->points = $placement->points+$racetrackRecord->points;
            $placement->save();
        }else{
            $input = [
                'runner_dni' => $racetrackRecord->runner_dni,
                'points' => $racetrackRecord->points
            ];
            Placement::create($input);
        }
    }

    /**
     * Handle the RacetrackRecord "deleted" event.
     *
     * @param  \App\Models\RacetrackRecord  $racetrackRecord
     * @return void
     */
    public function deleted(RacetrackRecord $racetrackRecord)
    {
        //
    }

    /**
     * Handle the RacetrackRecord "restored" event.
     *
     * @param  \App\Models\RacetrackRecord  $racetrackRecord
     * @return void
     */
    public function restored(RacetrackRecord $racetrackRecord)
    {
        //
    }

    /**
     * Handle the RacetrackRecord "force deleted" event.
     *
     * @param  \App\Models\RacetrackRecord  $racetrackRecord
     * @return void
     */
    public function forceDeleted(RacetrackRecord $racetrackRecord)
    {
        //
    }
}
