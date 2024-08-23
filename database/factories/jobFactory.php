<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class jobFactory extends Factory
{
    private function generateRandomImage($path)
    {

        // if (!is_dir($path) || count(scandir($path)) <= 2) {
        //     return 'default.jpg';
        // }

        $files = scandir($path);
        $files = array_diff($files, array('.', '..'));

        return fake()->randomElement($files);
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $minSalary = fake()->randomFloat(2, 3000, 15000);
        $maxSalary = fake()->randomFloat(2, $minSalary, 15000);
        return [
            'title' => fake()->word(),
            'description'  => fake()->text(),
            'location' => fake()->city(),
            'min_salary' =>   $minSalary,
            'max_salary' => $maxSalary,
            'published'  =>fake()->numberBetween(0, 1),
            'company_name' => fake()->company(),
            'category_id' => fake()->numberBetween(1, 10),
            'job_nature' => fake()->randomElement(['Full-time', 'Part-time']),
            'Vacancy' => fake()->numberBetween(1, 10),
            'img' => $this->generateRandomImage(public_path('assets/img/job/')),
        ];
    }
}
