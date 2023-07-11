<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ;$i ++ ){
            $project = new Project();
            $project->title = $faker->words(2, true);
            $project->content = $faker->text(200);
            $project->image= $faker->imageUrl(800 , 600, 'animals', true);
            $project->save();
        }
    }
}
