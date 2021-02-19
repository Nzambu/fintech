<?php

namespace Database\Seeders\Customer;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_status')->insert([
            [
                'status' => 'Active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'status' => 'Inactive',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'status' => 'Dormant',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
