<?php

namespace Database\Factories\Transaction;

use Illuminate\Support\Str;
use App\Models\Transaction\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status_id' => $this->faker->numberBetween(1, 2),
            'type_id' => $this->faker->numberBetween(1, 2),
            'method_id' => $this->faker->numberBetween(1, 2),
            'beneficiary' => $this->faker->biasedNumberBetween($max = 2, $max = 8),
            'sender' => $this->faker->biasedNumberBetween($max = 2, $max = 8),
            'amount' => $this->faker->biasedNumberBetween($max = 1000, $max = 9000),
            'ref_no' => 'ref',
            'order_no' => 'on'.Str::random(3),            
        ];
    }
}
