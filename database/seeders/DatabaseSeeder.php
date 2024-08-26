<?php

namespace Database\Seeders;
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
        //User::factory(10)->create();
        //Testimonial::factory(10)->create();
        Category::factory(5)->create();
       // Job::factory(5)->create();
        //Testimonial::factory(5)->create();
       // contact::factory(5)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    }
}
