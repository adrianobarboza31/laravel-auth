<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categories;

class categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Html', 'Css', 'JavaScript', 'php', 'VUE', 'laravel'];
        foreach($categories as $category){
            $newCategory = new categories();
            $newCategory->nome_categoria = $category;
            $newCategory->save();
        }
    }
}
