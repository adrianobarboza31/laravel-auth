<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['database', 'mysql', 'sass'];
        foreach($technologies as $technology){
            $newTechnology = new Technology();
            $newTechnology->nome_technology = $technology;
            $newTechnology->save();
        }
    }
}
