<?php

namespace Database\Factories\Transaction;

use App\Models\Transaction\TransactionStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionStatusFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TransactionStatus::class;

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
