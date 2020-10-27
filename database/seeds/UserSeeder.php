<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        	"name"=>"daw myint myint aye",
        	"email"=>"myintmyintaye@gmail.com",
        	"password"=>Hash::make('234999567')
        ]);

          User::create([
        	"name"=>"myo myint",
        	"email"=>"myomyint@gmail.com",
        	"password"=>Hash::make('4569999789')
        ]);
    }
}
