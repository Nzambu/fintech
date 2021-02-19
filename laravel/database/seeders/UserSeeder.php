<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Patrick',
            'last_name' => 'Nzambu',
            'email_verified_at' => now(),
            'gender_id' => 1,
            'system_user' => 1,
            'id_number' => 26262626,
        ]);
    }
}
