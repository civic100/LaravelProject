<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Runner;
class RunnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Runner1
        $runner1 = new Runner;
        $runner1 -> dni = '1Q';
        $runner1 -> name = 'Runner1';
        $runner1 -> sex= 'male';
        $runner1 -> address = 'Av 1';
        $runner1 -> birth_date = '1997-02-20';
        $runner1 -> federation = '1';
        $runner1 -> num_federation = 1;
        $runner1 -> save();

        //Runner2
        $runner2 = new Runner;
        $runner2 -> dni = '1W';
        $runner2 -> name = 'Runner2';
        $runner2 -> sex= 'male';
        $runner2 -> address = 'Av 2';
        $runner2 -> birth_date = '1998-02-20';
        $runner2 -> federation = '1';
        $runner2 -> num_federation = 2;
        $runner2 -> save();

        //Runner3
        $runner3 = new Runner;
        $runner3 -> dni = '1E';
        $runner3 -> name = 'Runner3';
        $runner3 -> sex= 'female';
        $runner3 -> address = 'Av 3';
        $runner3 -> birth_date = '1995-07-20';
        $runner3 -> federation = '1';
        $runner3 -> num_federation = 3;
        $runner3 -> save();

        //Runner4
        $runner4 = new Runner;
        $runner4 -> dni = '1R';
        $runner4 -> name = 'Runner4';
        $runner4 -> sex= 'female';
        $runner4 -> address = 'Av 4';
        $runner4 -> birth_date = '1987-02-20';
        $runner4 -> federation = '1';
        $runner4 -> num_federation = 4;
        $runner4 -> save();

        //Runner5
        $runner5 = new Runner;
        $runner5 -> dni = '1T';
        $runner5 -> name = 'Runner5';
        $runner5 -> sex= 'male';
        $runner5 -> address = 'Av 5';
        $runner5 -> birth_date = '1988-02-20';
        $runner5 -> federation = '1';
        $runner5 -> num_federation = 5;
        $runner5 -> save();

        //Runner6
        $runner6 = new Runner;
        $runner6 -> dni = '1Y';
        $runner6 -> name = 'Runner6';
        $runner6 -> sex= 'female';
        $runner6 -> address = 'Av 6';
        $runner6 -> birth_date = '1985-07-20';
        $runner6 -> federation = '1';
        $runner6 -> num_federation = 6;
        $runner6 -> save();

        //Runner7
        $runner7 = new Runner;
        $runner7 -> dni = '1U';
        $runner7 -> name = 'Runner7';
        $runner7 -> sex= 'male';
        $runner7 -> address = 'Av 7';
        $runner7 -> birth_date = '1977-02-20';
        $runner7 -> federation = '1';
        $runner7 -> num_federation = 7;
        $runner7 -> save();

        //Runner8
        $runner8 = new Runner;
        $runner8 -> dni = '1I';
        $runner8 -> name = 'Runner8';
        $runner8 -> sex= 'male';
        $runner8 -> address = 'Av 8';
        $runner8 -> birth_date = '1978-02-20';
        $runner8 -> federation = '1';
        $runner8 -> num_federation = 8;
        $runner8 -> save();

        //Runner9
        $runner9 = new Runner;
        $runner9 -> dni = '1O';
        $runner9 -> name = 'Runner9';
        $runner9 -> sex= 'female';
        $runner9 -> address = 'Av 9';
        $runner9 -> birth_date = '1975-07-20';
        $runner9 -> federation = '1';
        $runner9 -> num_federation = 9;
        $runner9 -> save();

        //Runner10
        $runner10 = new Runner;
        $runner10 -> dni = '1P';
        $runner10 -> name = 'Runner10';
        $runner10 -> sex= 'female';
        $runner10 -> address = 'Av 10';
        $runner10 -> birth_date = '1967-02-20';
        $runner10 -> federation = '1';
        $runner10 -> num_federation = 10;
        $runner10 -> save();

        //Runner11
        $runner11 = new Runner;
        $runner11 -> dni = '1A';
        $runner11 -> name = 'Runner11';
        $runner11 -> sex= 'male';
        $runner11 -> address = 'Av 11';
        $runner11 -> birth_date = '1968-02-20';
        $runner11 -> federation = '1';
        $runner11 -> num_federation = 11;
        $runner11 -> save();

        //Runner12
        $runner12 = new Runner;
        $runner12 -> dni = '1S';
        $runner12 -> name = 'Runner12';
        $runner12 -> sex= 'male';
        $runner12 -> address = 'Av 12';
        $runner12 -> birth_date = '1965-07-20';
        $runner12 -> federation = '1';
        $runner12 -> num_federation = 12;
        $runner12 -> save();

        //Runner13
        $runner13 = new Runner;
        $runner13 -> dni = '1D';
        $runner13 -> name = 'Runner13';
        $runner13 -> sex= 'male';
        $runner13 -> address = 'Av 13';
        $runner13 -> birth_date = '1995-07-20';
        $runner13 -> federation = '1';
        $runner13 -> num_federation = 13;
        $runner13 -> save();

        //Runner14
        $runner14 = new Runner;
        $runner14 -> dni = '1F';
        $runner14 -> name = 'Runner14';
        $runner14 -> sex= 'female';
        $runner14 -> address = 'Av 14';
        $runner14 -> birth_date = '1985-07-20';
        $runner14 -> federation = '1';
        $runner14 -> num_federation = 14;
        $runner14 -> save();

        //Runner15
        $runner15 = new Runner;
        $runner15 -> dni = '1G';
        $runner15 -> name = 'Runner15';
        $runner15 -> sex= 'female';
        $runner15 -> address = 'Av 15';
        $runner15 -> birth_date = '1965-07-20';
        $runner15 -> federation = '1';
        $runner15 -> num_federation = 15;
        $runner15 -> save();




    }
}
