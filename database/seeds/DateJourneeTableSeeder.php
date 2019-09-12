<?php

use Illuminate\Database\Seeder;

class DateJourneeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('datejournee')->insert([
            ['journee_idt' => 1, 'dte' => '2019-09-17',],
            ['journee_idt' => 1, 'dte' => '2019-09-18',],
            ['journee_idt' => 2, 'dte' => '2019-10-01',],
            ['journee_idt' => 2, 'dte' => '2019-10-02',],
            ['journee_idt' => 3, 'dte' => '2019-10-22',],
            ['journee_idt' => 3, 'dte' => '2019-10-23',],
            ['journee_idt' => 4, 'dte' => '2019-11-05',],
            ['journee_idt' => 4, 'dte' => '2019-11-06',],
            ['journee_idt' => 5, 'dte' => '2019-11-26',],
            ['journee_idt' => 5, 'dte' => '2019-11-27',],
            ['journee_idt' => 6, 'dte' => '2019-12-10',],
            ['journee_idt' => 6, 'dte' => '2019-12-11',],
        ]);
    }
}
