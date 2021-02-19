<?php

namespace Database\Seeders\Transaction;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_status')->insert([
            [
                'status' => 'Pending',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'status' => 'Success',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'status' => 'Decline',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
