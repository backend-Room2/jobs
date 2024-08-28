<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private function generateRandomImage($path)
    {
        $files = scandir($path);
        $files = array_diff($files, array('.', '..'));

        return fake()->randomElement($files);
    }
    public function definition(): array
    {
        return [
            'category_name' => fake()->unique()->company(),
            'image'=>$this->generateRandomImage(public_path('/assets/img/categories')),
            'no_of_vacancy'=> fake()->numberBetween(0, 7),
            
        ];
    }
}
