<?php

namespace Database\Factories\Customer;

use App\Models\Customer\CustomerStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerStatus::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
