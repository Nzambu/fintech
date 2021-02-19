<?php

namespace Database\Factories\Customer;

use App\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cst_id' => $this->faker->unique()->numberBetween(2, 8),
            'status_id' => 1,
            'group_id' => $this->faker->biasedNumberBetween($min = 1, $max = 3),
            'currency_id' => 1,
        ];
    }
}
