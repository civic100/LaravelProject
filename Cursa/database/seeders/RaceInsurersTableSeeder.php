<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RaceInsurer;
class RaceInsurersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insurer1
            //Race1
            $raceinsurer1 = new RaceInsurer;
            $raceinsurer1->race_id = 1;
            $raceinsurer1->insurer_cif = "A-28141935";
            $raceinsurer1->price = 100;
            $raceinsurer1->save();
            //Race2
            $raceinsurer2 = new RaceInsurer;
            $raceinsurer2->race_id = 2;
            $raceinsurer2->insurer_cif = "A-28141935";
            $raceinsurer2->price = 100;
            $raceinsurer2->save();
           //Race3
            $raceinsurer3 = new RaceInsurer;
            $raceinsurer3->race_id = 3;
            $raceinsurer3->insurer_cif= "A-28141935";
            $raceinsurer3->price = 150;
            $raceinsurer3->save();

        //Insurer2
            //Race1
            $raceinsurer4 = new RaceInsurer;
            $raceinsurer4->race_id = 1;
            $raceinsurer4->insurer_cif= "A-60917978";
            $raceinsurer4->price = 110;
            $raceinsurer4->save();
            //Race3
            $raceinsurer5 = new RaceInsurer;
            $raceinsurer5->race_id = 3;
            $raceinsurer5->insurer_cif= "A-60917978";
            $raceinsurer5->price = 90;
            $raceinsurer5->save();
            //Race4
            $raceinsurer6 = new RaceInsurer;
            $raceinsurer6->race_id = 4;
            $raceinsurer6->insurer_cif= "A-60917978";
            $raceinsurer6->price = 90;
            $raceinsurer6->save();

        //Insurer3
            //Race1
            $raceinsurer7 = new RaceInsurer;
            $raceinsurer7->race_id = 1;
            $raceinsurer7->insurer_cif= "A28007268";
            $raceinsurer7->price = 190;
            $raceinsurer7->save();
            //Race3
            $raceinsurer8 = new RaceInsurer;
            $raceinsurer8->race_id = 3;
            $raceinsurer8->insurer_cif= "A28007268";
            $raceinsurer8->price = 170;
            $raceinsurer8->save();
            //Race6
            $raceinsurer9 = new RaceInsurer;
            $raceinsurer9->race_id = 6;
            $raceinsurer9->insurer_cif= "A28007268";
            $raceinsurer9->price = 125;
            $raceinsurer9->save();
            //Race4
            $raceinsurer10 = new RaceInsurer;
            $raceinsurer10->race_id = 4;
            $raceinsurer10->insurer_cif= "A28007268";
            $raceinsurer10->price = 125;
            $raceinsurer10->save();

        //Insurer4
            //Race2
            $raceinsurer11 = new RaceInsurer;
            $raceinsurer11->race_id = 2;
            $raceinsurer11->insurer_cif= "A28007748";
            $raceinsurer11->price = 80;
            $raceinsurer11->save();
            //Race6
            $raceinsurer12 = new RaceInsurer;
            $raceinsurer12->race_id = 6;
            $raceinsurer12->insurer_cif= "A28007748";
            $raceinsurer12->price = 96;
            $raceinsurer12->save();
            //Race5
            $raceinsurer13 = new RaceInsurer;
            $raceinsurer13->race_id = 5;
            $raceinsurer13->insurer_cif= "A28007748";
            $raceinsurer13->price = 220;
            $raceinsurer13->save();
            //Race4
            $raceinsurer14 = new RaceInsurer;
            $raceinsurer14->race_id = 4;
            $raceinsurer14->insurer_cif= "A28007748";
            $raceinsurer14->price = 160;
            $raceinsurer14->save();


        //Insurer5
            //Race1
            $raceinsurer15 = new RaceInsurer;
            $raceinsurer15->race_id = 1;
            $raceinsurer15->insurer_cif= "A28011864";
            $raceinsurer15->price = 80;
            $raceinsurer15->save();
            //Race2
            $raceinsurer16 = new RaceInsurer;
            $raceinsurer16->race_id = 2;
            $raceinsurer16->insurer_cif= "A28011864";
            $raceinsurer16->price = 96;
            $raceinsurer16->save();
            //Race3
            $raceinsurer17 = new RaceInsurer;
            $raceinsurer17->race_id = 3;
            $raceinsurer17->insurer_cif= "A28011864";
            $raceinsurer17->price = 220;
            $raceinsurer17->save();
            //Race6
            $raceinsurer18 = new RaceInsurer;
            $raceinsurer18->race_id = 6;
            $raceinsurer18->insurer_cif= "A28011864";
            $raceinsurer18->price = 160;
            $raceinsurer18->save();


        //Insurer6
            //Race4
            $raceinsurer19 = new RaceInsurer;
            $raceinsurer19->race_id = 4;
            $raceinsurer19->insurer_cif= "A58333261";
            $raceinsurer19->price = 80;
            $raceinsurer19->save();
            //Race5
            $raceinsurer20 = new RaceInsurer;
            $raceinsurer20->race_id = 5;
            $raceinsurer20->insurer_cif= "A58333261";
            $raceinsurer20->price = 96;
            $raceinsurer20->save();

    }
}
