<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sponsor;
class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Sponsor1
        $sponsor1 = new Sponsor;
        $sponsor1->cif = 'A80148364';
        $sponsor1->name = 'Orica';
        $sponsor1->logo = '20230204093024.png';
        $sponsor1->address = 'Carretera Villafer, S/n, Km 7 200';
        $sponsor1->email = 'info@orica.com';
        $sponsor1->total = 120;
        $sponsor1->save();

        //Sponsor2
        $sponsor2 = new Sponsor;
        $sponsor2->cif = 'B20820940';
        $sponsor2->name = 'giant bicycles';
        $sponsor2->logo = '20230204093239.png';
        $sponsor2->address = 'Domicilio Social';
        $sponsor2->email = 'info@giantbicycles.com';

        $sponsor2->total = 120;

        $sponsor2->save();

        //Sponsor3
        $sponsor3 = new Sponsor;
        $sponsor3->cif = 'B65091076';
        $sponsor3->name = 'Lampre';
        $sponsor3->logo = '20230204092344.png';
        $sponsor3->address = 'ESPAÑA. Pasaje Yucatan, 42 - LOCAL 3';
        $sponsor3->email = 'info@lampre.com';
        $sponsor3->home = '1';
        $sponsor3->total = 120;

        $sponsor3->save();

        //Sponsor4
        $sponsor4 = new Sponsor;
        $sponsor4->cif = 'B66110644';
        $sponsor4->name = 'etixx sports';
        $sponsor4->logo = '20230204092107.svg';
        $sponsor4->address = 'CALLE DE L`ENERGIA, 7';
        $sponsor4->email = 'info@atixxsports.com';
        $sponsor4->home = '1';
        $sponsor4->total = 120;

        $sponsor4->save();

        //Sponsor5
        $sponsor5 = new Sponsor;
        $sponsor5->cif = 'B83916056';
        $sponsor5->name = 'continental neumaticos';
        $sponsor5->logo = '20230204094131.svg';
        $sponsor5->address = 'AVENIDA DE CASTILLA';
        $sponsor5->email = 'info.industrial.es@conti.de';

        $sponsor5->total = 120;

        $sponsor5->save();

        //Sponsor6
        $sponsor6 = new Sponsor;
        $sponsor6->cif = 'F-189561265';
        $sponsor6->name = 'Tour de france';
        $sponsor6->logo = '20230204094938.png';
        $sponsor6->address = 'Francia';
        $sponsor6->email = 'info@tourdefrance.com';
        $sponsor6->home = '1';
        $sponsor6->total = 120;

        $sponsor6->save();

        //Sponsor7
        $sponsor7 = new Sponsor;
        $sponsor7->cif = 'S74161135A';
        $sponsor7->name = 'Sokda';
        $sponsor7->logo = '20230204093902.png';
        $sponsor7->address = 'A Gándara, Estrada Castelao nº 49-50';
        $sponsor7->email = 'info@skoda.com';

        $sponsor7->total = 120;

        $sponsor7->save();

        //Sponsor8
        $sponsor8 = new Sponsor;
        $sponsor8->cif = 'N0393770C';
        $sponsor8->name = 'Bmc Switzerland';
        $sponsor8->logo = '20230204091732.png';
        $sponsor8->address = 'AV PIO XII, Nº 26 28016, MADRID, MADRID';
        $sponsor8->email = 'infousa@bmc-switzerland.com';
        $sponsor8->home ='1';
        $sponsor8->total = 120;

        $sponsor8->save();

    }
}
