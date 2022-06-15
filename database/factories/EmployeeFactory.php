<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'address'=> $this->faker->address(),
            'phone'=> $this->faker->phoneNumber(),
            'hiring_date'=> $this->faker->date('Y-m-d'),
            'role_id'=> $this->faker->numberBetween(1,4),
            'salary'=> $this->faker->randomFloat(2,5000,9000),
            'dept_id'=> $this->faker->numberBetween(1,4),
        ];
    }
}
