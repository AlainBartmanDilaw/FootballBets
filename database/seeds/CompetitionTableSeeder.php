<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('competition')->insert([
            'cod' => 'UEFAEL',
            'lib' => 'Europa League',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
