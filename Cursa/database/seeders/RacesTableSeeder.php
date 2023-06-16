<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Race;
class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Race1
        $race1 = new Race;
        $race1 -> name = "Transpyr";
        $race1 -> description = 'The famous race from the Mediterranean to the Bay of Biscay in 7 consecutive stages crossing the Pyrenees is the most physically and mentally demanding. With a route of about 800 kilometers and almost 20,000 meters of accumulated unevenness, there are plenty of explanations for why the organizers insist that those who want to participate have to be aware of their limitations and be prepared for the test.';
        $race1 -> ramp = 450;
        $race1 -> max_participants = '100';
        $race1 -> race_price = 100;
        $race1 -> km = 432;
        $race1 -> date = '2023-04-16';
        $race1 -> hour = '06:00:00';
        $race1 -> starting_point = 'La Sierra de Cazorla';
        $race1 -> maps_image  = '20230204101753.png';
        $race1 -> promotional_poster  = '20230204101753.jpg';
        $race1 -> sponsor_price = 0;
        $race1 -> save();

        //Race2
        $race2 = new Race;
        $race2 -> name = "Andalucia Bike Race";
        $race2 -> description = 'The Andalucía Bike Race owes its fame to its eight editions of high participation and impressive routes between the provinces of Jaén and Córdoba. The participants say that it is one of the best organized races thanks to the planning of its circular routes, the comfortable accommodation and all the services that the race offers.';
        $race2 -> ramp = 630;
        $race2 -> max_participants = '50';
        $race2 -> race_price = 260;
        $race2 -> km = 380;
        $race2 -> date = '2023-02-16';
        $race2 -> hour = '00:00:00';
        $race2 -> starting_point = 'a';
        $race2 -> maps_image  = '20230204102037.png';
        $race2 -> promotional_poster = '20230204102037.jpg';
        $race2 -> sponsor_price = 0;
        $race2 -> save();

        //Race3
        $race3 = new Race;
        $race3 ->name = "Rioja Bike Race";
        $race3 -> description = 'The perfect combination of gastronomy, culture, landscape and the beautiful environment ideal for mountain biking make the Rioja Bike Race one of the favorites of the participants, including women. During the three and a half days of the race, Logroño becomes the headquarters for its more than a thousand participants who enjoy the varied landscapes and many vineyards during their circular routes.';
        $race3 -> ramp = 600;
        $race3 -> max_participants = '80';
        $race3 -> race_price = 137;
        $race3 -> km = 0;
        $race3 ->  date = '2023-04-12';
        $race3 -> hour = '06:00:00';
        $race3 -> starting_point = 'Isla de Tenerife';
        $race3 -> maps_image  = '20230204102150.png';
        $race3 -> promotional_poster = '20230204102150.jpg';
        $race3 -> sponsor_price = 0;
        $race3 -> save();

        //Race4
        $race4 = new Race;
        $race4 ->name = "Catalunya Bike Race";
        $race4 -> description = 'This race debuted in 2017 and took off like foam, with around a thousand participants in its first two editions. After the first year, the organization learned from the experience and went from being a very technical and quite tough race with the first stage being a time trial to a more accessible race that accepts many styles and levels of cyclist in its second edition.';
        $race4 -> ramp = 440;
        $race4 -> max_participants = '50';
        $race4 -> race_price = 149;
        $race4 -> km = 639;
        $race4 -> date = '2023-02-16';
        $race4 -> hour = '09:00:00';
        $race4 -> starting_point = 'Tirol Austriaco';
        $race4 -> maps_image  = '20230204102405.png';
        $race4 -> promotional_poster = '20230204102405.jpg';
        $race4 -> sponsor_price = 0;
        $race4 -> save();

        //Race5
        $race5 = new Race;
        $race5 ->name = "Asturias Bike Race";
        $race5 -> description = 'In 2019 the second edition of this race will be held, which is the little sister of Andalucía, La Rioja and Catalunya Bike Race. This race with designation of origin and as beautiful as Asturias becomes part of the UCI circuit this year and promises balanced stages and stages tinged with green.';
        $race5 -> ramp = 450;
        $race5 -> max_participants = '100';
        $race5 -> race_price = 145;
        $race5 -> km = 694;
        $race5 ->  date = '2023-04-14';
        $race5 -> hour = '08:00:00';
        $race5 -> starting_point = 'Los Ancares';
        $race5 -> maps_image  = '20230204102511.png';
        $race5 -> promotional_poster = '20230204102511.jpg';
        $race5 -> sponsor_price = 0;
        $race5 -> save();

        //Race6
        $race6 = new Race;
        $race6 ->name = "Tour of Andalusia MTB";
        $race6 -> description = 'This race with more than 250 km of route divided into 4 stages between Málaga and Cádiz is a different competition that offers a lot of flexibility to participate (you can do one, two, three or all the stages, alone or with a team) and fights to be a social project with a family and environmental focus supporting the economy of inland Andalusia. It is a demanding MTB race but its organization is focused on making the experience of the participants unforgettable.';
        $race6 -> ramp = 500;
        $race6 -> max_participants = '70';
        $race6 -> race_price = 150;
        $race6 -> km = 693;
        $race6 -> date = '2023-04-13';
        $race6 -> hour = '05:00:00';
        $race6 -> starting_point = 'Parque Nacional del Stelvio';
        $race6 -> maps_image  = '20230204102732.png';
        $race6 -> promotional_poster = '20230204102732.jpg';
        $race6 -> sponsor_price = 0;
        $race6 -> save();

        //Race7
        $race7 = new Race;
        $race7 ->name = "Volcat";
        $race7 -> description = 'The 14th edition of this test will be held in April, making it not only the oldest in Spain but also one of the oldest in Europe. It is a race that adds points for the UCI but it is of a popular format with a Pro and Open category and allows you to discover the trails, corners and places of the Central axis of Catalonia during its 4 stages and based in Igualada.        ';
        $race7 -> ramp = 430;
        $race7 -> max_participants = '100';
        $race7 -> race_price = 200;
        $race7 -> km = 710;
        $race7 -> date = '2023-04-15';
        $race7 -> hour = '09:00:00';
        $race7 -> starting_point = 'Asturias';
        $race7 -> maps_image  = '20230204102850.png';
        $race7 -> promotional_poster = '20230204102850.jpg';
        $race7 -> sponsor_price = 0;
        $race7 -> save();

    }
}
