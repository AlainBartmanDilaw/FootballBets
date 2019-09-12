<?php

use Illuminate\Database\Seeder;

class CompEditTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('CompEdit')->insert([
            ['Competition_Cod' => 'UEFACL', 'Edition_Cod' => '66', 'Lib' => 'UEFA Champions League 2019-2020',],
            ['Competition_Cod' => 'UEFAEL', 'Edition_Cod' => '49', 'Lib' => 'Europa League 2019-2020',],
        ]);
    }
}
