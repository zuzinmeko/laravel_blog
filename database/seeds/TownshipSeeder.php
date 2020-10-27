<?php

use Illuminate\Database\Seeder;
use App\Township;
class TownshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $townships=['Hlaing','Dagon','MyayNiGone'];
        foreach ($townships as $row) {
        	Township::create(["name" =>$row]);
        		
        }
    }
}
