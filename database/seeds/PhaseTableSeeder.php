<?php

use Illuminate\Database\Seeder;

class PhaseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('phase')->insert([
            ['lib' => 'Phase de groupes'],
            ['lib' => 'Huitième de finale'],
            ['lib' => 'Quart de finale'],
            ['lib' => 'Demie Finale'],
            ['lib' => 'Finale'],
        ]);
    }
}
