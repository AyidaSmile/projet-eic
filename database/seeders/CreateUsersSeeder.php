<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'SESSO',
               'surname'=>'Papa',
               'phone'=>'90345158',
               'sexe'=>'Masculin',
               'email'=>'admin@papa.com',
               'type'=>1,
               'password'=> bcrypt('123456'),
            ],
            // [
            //    'name'=>'Manager User',
            //    'email'=>'manager@tutsmake.com',
            //    'type'=> 2,
            //    'password'=> bcrypt('123456'),
            // ],
            [
               'name'=>'DOUTI',
               'surname'=>'Maman',
               'phone'=>'92984504',
               'sexe'=>'Féminin',
               'email'=>'user@maman.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
