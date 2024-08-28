<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobdata>
 */
class JobdataFactory extends Factory
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
            'jobTitle'=>fake()->randomElement(['Software Engineer', 'ICT teacher', 'Art Teacher']),
            'location'=>fake()->randomElement(['New York, USA', 'Don Bosco, 2 Shoubra street']),
            'description'=> fake()->text(),
            'responsibility'=> fake()->text(),
            'qualifications'=> fake()->text(),
            'companydetail'=> fake()->text(),
            'salaryFrom'=> fake()->randomFloat(2),
            'salaryTo'=> fake()->randomFloat(2),
            'image' => $this->generateRandomImage(public_path('/assets/img/jobs')),
            'published'=> fake()->numberBetween(0, 1),
            'featured'=> fake()->numberBetween(0, 1),
            'time'=> fake()->randomElement(['Full Time', 'Part Time']),
            'dateline'=> fake()->date(),
            'category_id'=> fake()->numberbetween(1,2)
        ];
    }
}
