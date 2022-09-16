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
               'name'=>'Admin User',
               'surname'=>'Admin User',
               'phone'=>'Admin User',
               'sexe'=>'Admin User',
               'email'=>'admin@tutsmake.com',
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
               'name'=>'User',
               'surname'=>'User',
               'phone'=>'User',
               'sexe'=>'User',
               'email'=>'user@tutsmake.com',
               'type'=>0,
               'password'=> bcrypt('123456'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}