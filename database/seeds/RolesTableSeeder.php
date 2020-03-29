<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
                [
                    'name' => 'Administrateur',
                    'guard_name' => 'web',
                ],
                [
                    'name' => 'Gestionnaire',
                    'guard_name' => 'web',
                ],
                [
                    'name' => 'Agent',
                    'guard_name' => 'web',
                ],
            ]
        );
    }
}
