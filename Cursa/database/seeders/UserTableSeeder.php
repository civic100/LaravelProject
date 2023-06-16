<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //User Admin
        $user1 = new User;
        $user1->name = 'admin';
        $user1->email = 'admin@admin.com';
        $user1->password = Hash::make('admin11111');
        $user1->save();
    }
}
