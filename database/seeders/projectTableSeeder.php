<?php

namespace Database\Seeders;

use App\Models\project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class projectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0;$i < 10;$i++){
            $newProject = new project();
            $newProject->nome_progetto = $faker->name;
            $newProject->save();
        }
    }
}
