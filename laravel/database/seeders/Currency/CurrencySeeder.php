<?php

namespace Database\Seeders\Currency;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            [
                "currency" => "Shilling",
                "slug" => "KSHS",
                "sign" => "/=",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                "currency" => "Dollar",
                "slug" => "USD",
                "sign" => "$",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                "currency" => "Sterling Pound",
                "slug" => "GBP",
                "sign" => "£",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                "currency" => "Euro",
                "slug" => "EUR",
                "sign" => "€",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
