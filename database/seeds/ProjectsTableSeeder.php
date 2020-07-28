<?php

use App\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i = 0; $i < 6 ; $i ++) { 
           $newProject = new Project();
           $newProject->progetto = $faker->name;
           $newProject->servizio = $faker->name;
           $newProject->username = $faker->email;
           $newProject->password = $faker->password;
           $newProject->save(); 
       }
    }
}
