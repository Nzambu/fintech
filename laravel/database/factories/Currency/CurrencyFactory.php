<?php

namespace Database\Factories\Currency;

use App\Models\Currency\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

class CurrencyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Currency::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "currency" => "Shilling",
            "slug" => "KSHS",
            "sign" => "/=",
        ];
    }
}
