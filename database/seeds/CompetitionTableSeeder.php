<?php

use Illuminate\Database\Seeder;

class CompetitionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('competition')->insert([
            'cod' => 'UEFACL',
            'lib' => 'UEFA Champion\'s League',
        ]);
        DB::table('competition')->insert([
            'cod' => 'UEFAEL',
            'lib' => 'Europa League',
        ]);
    }
}
