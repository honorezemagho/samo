<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'firstname' => 'Tsafack',
                'lastname' => 'Armand',
                'identification_id' => 1,
                'pays_id' => 1,
                'identification' => 118756894,
                'phone' => 673007588,
                'email' => 'tsafack40@gmail.com',
                'password' => bcrypt('07081999A'),
            ],
            [
                'firstname'=> 'Verki',
                'lastname' => 'Free',
                'identification_id' => 2,
                'pays_id' => 1,
                'identification' => 178456123,
                'phone' => 673457896,
                'email' => 'verki@bigtuyul.me',
                'password' => bcrypt('07081999A'),
            ],
            [
                'firstname' => 'Wamo',
                'lastname' => 'Francis',
                'identification_id' => 2,
                'pays_id' => 1,
                'identification' => 189756244,
                'phone' => 673758423,
                'email' => 'wamo2002@gmail.com',
                'password' => bcrypt('07081999A'),
            ],
        ]);
    }
}
