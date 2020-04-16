<?php

use Illuminate\Database\Seeder;

class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('accounts')->insert([
            [
                'user_id' => '1',
                'secret_code' => '5480',
                'amount' => 15,
            ],
            [
                'user_id' => '2',
                'secret_code' => '1590',
                'amount' => 150,
            ],
            [
                'user_id' => '1',
                'secret_code' => '1789',
                'amount' => 3200,
            ],
        ]);
    }
}
