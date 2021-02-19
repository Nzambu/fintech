<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\Currency\CurrencySeeder;
use Database\Seeders\Customer\CustomerGroupSeeder;
use Database\Seeders\Customer\CustomerStatusSeeder;
use Database\Seeders\Transaction\TransactionTypeSeeder;
use Database\Seeders\Transaction\TransactionMethodSeeder;
use Database\Seeders\Transaction\TransactionStatusSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GenderSeeder::class);
        $this->call(UserSeeder::class);

        DB::table('phones')->insert([
            'phone' => '701203405',
            'user_id' => 1,
            'primary' =>true,
            'verified' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('emails')->insert([
            'email' => 'patrick@fintech.com',
            'user_id' => 1,
            'primary' =>true,
            'verified' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        \App\Models\User::factory(7)->create();        
        \App\Models\Password::factory(1)->create();

        $this->call(CurrencySeeder::class);
        $this->call(CustomerGroupSeeder::class);
        $this->call(CustomerStatusSeeder::class);

        $this->call(TransactionMethodSeeder::class);
        $this->call(TransactionStatusSeeder::class);
        $this->call(TransactionTypeSeeder::class);

        \App\Models\Customer\Customer::factory(7)->create();
        \App\Models\Email::factory(7)->create();
        \App\Models\Phone::factory(7)->create();
        \App\Models\Transaction\Transaction::factory(7)->create();
    }
}
