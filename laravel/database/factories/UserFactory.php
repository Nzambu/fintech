<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email_verified_at' => now(),
            'gender_id' => $this->faker->biasedNumberBetween($min = 1, $max = 2),
            'system_user' => 0,
            'id_number' => $this->faker->unique()->biasedNumberBetween($min = 30303030, $max = 38383838),
        ];
    }
}
