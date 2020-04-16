<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(UsersTableSeeder::class);
        $this->call(IdentificationTableSeeder::class);
        $this->call(PaysTableSeeder::class);
        $this->call(AccountTableSeeder::class);
    }
}
