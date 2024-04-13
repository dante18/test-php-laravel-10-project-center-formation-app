<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\Formation;
use App\Models\Parameter;
use App\Models\Profile;
use App\Models\User;
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

        User::factory()
            ->count(1000)
            ->create()
            ->each(function (User $user) {
                Profile::factory()->create([
                    'name' => 'CUSTOMER',
                    'user_id' => $user->id,
                ]);
            })
        ;

        Course::factory(5)
            ->for(Category::factory()->create())
            ->create()
        ;

        Formation::factory()
            ->has(Course::factory()->for(Category::factory()))
            ->for(Category::factory()->create())
            ->count(10)
            ->create()
        ;
    }
}
