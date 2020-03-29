<?php

use Illuminate\Database\Seeder;

class IdentificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('identifications')->insert([
            [
                'code' => 'CNI',
                'identification_fr' => "Carte Nationale d'Identité",
                'identification_en' => "National Identity Card",
            ],
            [
                'code' => 'PASS',
                'identification_fr' => "Passport",
                'identification_en' => "Passport",
            ],
        ]);
}
}
