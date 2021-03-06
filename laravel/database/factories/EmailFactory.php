<?php

namespace Database\Factories;

use App\Models\Email;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Email::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => strtolower(Str::random(10)).'@fintech.com',
            'user_id' => $this->faker->numberBetween(2, 8),
            'primary' =>true,
            'verified' => true
        ];
    }
}
