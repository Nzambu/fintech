<?php

namespace Database\Seeders\Customer;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_groups')->insert([
            [
                'group' => 'Individual',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'group' => 'SME',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'group' => 'Corporate',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
