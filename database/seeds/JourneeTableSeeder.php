<?php

use Illuminate\Database\Seeder;

class JourneeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('journee')->insert([
            ['Num' => 1, 'phase_idt' => 1, 'lib' => 'Journée 1'],
            ['Num' => 2, 'phase_idt' => 1, 'lib' => 'Journée 2'],
            ['Num' => 3, 'phase_idt' => 1, 'lib' => 'Journée 3'],
            ['Num' => 4, 'phase_idt' => 1, 'lib' => 'Journée 4'],
            ['Num' => 5, 'phase_idt' => 1, 'lib' => 'Journée 5'],
            ['Num' => 6, 'phase_idt' => 1, 'lib' => 'Journée 6'],
        ]);
    }
}
