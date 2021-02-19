<?php

namespace Database\Factories;

use App\Models\Phone;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'phone' => '7'.$this->faker->biasedNumberBetween($min = 01000123, $max = 22222222),
            'user_id' => $this->faker->numberBetween(2, 8),
            'primary' =>true,
            'verified' => true
        ];
    }
}
