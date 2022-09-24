<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'user_id' =>$this->faker->unique()->numberBetween(1, User::count()),
        ];
    }
}
