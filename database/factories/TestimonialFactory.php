<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    private function generateRandomImage($path)
    {
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
        return [
            'name' => fake()->randomElement(['Emily', 'Johnathan', 'Kurtis']),
            'profession' => fake()->randomElement(['Software Engineer', 'Product Manager', 'Wordpress Developer']),
            'description' => fake()->text(),
            'pub' => fake()->numberBetween(0, 1),
            #'image' => basename(fake()->image(public_path('assets/img/admins'))),
            'image' => $this->generateRandomImage(public_path('assets/img/admins/')),
          #for when we make a relation w/the admins
//      'adminID' => fake()->numberBetween(1, 10),
        ];
    }
}
