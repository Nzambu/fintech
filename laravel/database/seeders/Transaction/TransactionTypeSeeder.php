<?php

namespace Database\Seeders\Transaction;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_types')->insert([
            [
                'type' => 'Voucher',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'type' => 'Loyalty',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
