<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RaceSponsor;

class RaceSponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sponsor1 - A80148364
            //Race1
            $racesponsor1 = new RaceSponsor;
            $racesponsor1->race_id = 1;
            $racesponsor1->sponsor_cif = "A80148364";
            $racesponsor1->save();
            //Race2
            $racesponsor2 = new RaceSponsor;
            $racesponsor2->race_id = 2;
            $racesponsor2->sponsor_cif = "A80148364";
            $racesponsor2->save();
            //Race3
            $racesponsor3 = new RaceSponsor;
            $racesponsor3->race_id = 3;
            $racesponsor3->sponsor_cif = "A80148364";
            $racesponsor3->save();

        //Sponsor2 - B20820940
            //Race4
            $racesponsor4 = new RaceSponsor;
            $racesponsor4->race_id = 2;
            $racesponsor4->sponsor_cif = "B20820940";
            $racesponsor4->save();
            //Race5
            $racesponsor5 = new RaceSponsor;
            $racesponsor5->race_id = 4;
            $racesponsor5->sponsor_cif = "B20820940";
            $racesponsor5->save();
            //Race6
            $racesponsor6 = new RaceSponsor;
            $racesponsor6->race_id = 6;
            $racesponsor6->sponsor_cif = "B20820940";
            $racesponsor6->save();

        //Sponsor3 - B65091076
            //Race7
            $racesponsor7 = new RaceSponsor;
            $racesponsor7->race_id = 3;
            $racesponsor7->sponsor_cif = "B65091076";
            $racesponsor7->save();
            //Race8
            $racesponsor8 = new RaceSponsor;
            $racesponsor8->race_id = 5;
            $racesponsor8->sponsor_cif = "B65091076";
            $racesponsor8->save();

        //Sponsor4 - B66110644
            //Race9
            $racesponsor9 = new RaceSponsor;
            $racesponsor9->race_id = 5;
            $racesponsor9->sponsor_cif = "B66110644";
            $racesponsor9->save();
            //Race10
            $racesponsor10 = new RaceSponsor;
            $racesponsor10->race_id = 1;
            $racesponsor10->sponsor_cif = "B66110644";
            $racesponsor10->save();

        //Sponsor5 - B83916056
            //Race11
            $racesponsor11 = new RaceSponsor;
            $racesponsor11->race_id = 2;
            $racesponsor11->sponsor_cif = "B83916056";
            $racesponsor11->save();
            //Race12
            $racesponsor12 = new RaceSponsor;
            $racesponsor12->race_id = 4;
            $racesponsor12->sponsor_cif = "B83916056";
            $racesponsor12->save();

        //Sponsor6 - F-189561265
            //Race13
            $racesponsor13 = new RaceSponsor;
            $racesponsor13->race_id = 3;
            $racesponsor13->sponsor_cif = "F-189561265";
            $racesponsor13->save();
            //Race14
            $racesponsor14 = new RaceSponsor;
            $racesponsor14->race_id = 6;
            $racesponsor14->sponsor_cif = "F-189561265";
            $racesponsor14->save();


        //Sponsor7 - N0393770C
            //Race15
            $racesponsor15 = new RaceSponsor;
            $racesponsor15->race_id = 1;
            $racesponsor15->sponsor_cif = "N0393770C";
            $racesponsor15->save();
            //Race16
            $racesponsor16 = new RaceSponsor;
            $racesponsor16->race_id = 5;
            $racesponsor16->sponsor_cif = "N0393770C";
            $racesponsor16->save();
            //Race17
            $racesponsor17 = new RaceSponsor;
            $racesponsor17->race_id = 4;
            $racesponsor17->sponsor_cif = "N0393770C";
            $racesponsor17->save();


        //Sponsor8 - S74161135A
            //Race15
            $racesponsor18 = new RaceSponsor;
            $racesponsor18->race_id = 2;
            $racesponsor18->sponsor_cif = "S74161135A";
            $racesponsor18->save();
            //Race16
            $racesponsor19 = new RaceSponsor;
            $racesponsor19->race_id = 3;
            $racesponsor19->sponsor_cif = "S74161135A";
            $racesponsor19->save();
            //Race17
            $racesponsor20 = new RaceSponsor;
            $racesponsor20->race_id = 5;
            $racesponsor20->sponsor_cif = "S74161135A";
            $racesponsor20->save();

    }
}

