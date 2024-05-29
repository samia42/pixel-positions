<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id'=>Employer::factory(),
            'title'=> fake()->jobTitle(),
            'salary'=> fake()->randomElement(['$50,000','$80,000','$40,000']),
            'location'=>'Remote',
            'schedule'=>'Full Time',
            'url'=>fake()->randomElement(['https://remote.co/job/senior-internal-audit-manager-27/','https://remote.co/job/data-entry-specialist-15-4/','https://remote.co/job/sr-hr-generalist-28/','https://remote.co/job/mid-backend-software-engineer-python-27/']),
            'featured'=>false,
        ];
    }
}
