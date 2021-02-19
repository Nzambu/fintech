<?php

namespace Database\Seeders\Transaction;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_methods')->insert([
            [
                'method' => 'Debit Card',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'method' => 'Cash',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
