<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    public function run()
    {
        $Technologies = ['PHP', 'JS', 'VUE-3', 'MYSQL', 'LARAVEL', 'REACT', 'HTML', 'CSS'];

        foreach ($Technologies as $Technology) {
            $newTechnology = new Technology();
            $newTechnology->name = $Technology;
            $newTechnology->save();
        }
    }
}