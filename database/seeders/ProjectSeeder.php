<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 30 ; $i++) {
            $new_project = new Project();

            $new_project->title = $faker->words(2,true);
            $new_project->image = $faker->imageUrl(360,360,true);
            $new_project->description = $faker->paragraph();
            $new_project->slug = Str::slug($new_project->title,'-');

            $new_project->save();
        }
    }
}
