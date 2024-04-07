<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use App\Models\Formation;
use App\Models\Parameter;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Parameter::factory(1)->create([
            'name' => 'APP_HOME_HERO_TITLE',
            'value' => "Apprenez des compétences qui vous permettront d'évoluer"
        ]);

        Parameter::factory(1)->create([
            'name' => 'APP_HOME_HERO_SUB_TITLE',
            'value' => 'de manière rapide et qui vous correspond'
        ]);

        Course::factory(20)->create();

        Formation::factory(10)->create();
    }
}
