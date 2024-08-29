<?php

namespace Database\Seeders;
<<<<<<< HEAD
||||||| f9039ba

use App\Models\testimonial;
=======

>>>>>>> 442343fd3e0288a45e606b96422c485f05a1a1cb
use App\Models\Category;
use App\Models\Job;
use App\Models\contact;
use App\Models\User;
use App\Models\Testimonial;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //Testimonial::factory(10)->create();
        Category::factory(10)->create();
        Job::factory(30)->create();
        //Testimonial::factory(5)->create();
       // contact::factory(5)->create();

       
        Testimonial::factory(10)->create();


        Category::factory(5)->create();
        Job::factory(5)->create();
        testimonial::factory(5)->create();
        //there is no model for contact is it nesecary?
       // contact::factory(5)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
