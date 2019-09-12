<?php

use Illuminate\Database\Seeder;

class GroupeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('groupe')->insert([
            ['cod' => 'A', 'lib' => 'Groupe A', 'CompEdit_Idt' => 1,],
            ['cod' => 'B', 'lib' => 'Groupe B', 'CompEdit_Idt' => 1,],
            ['cod' => 'C', 'lib' => 'Groupe C', 'CompEdit_Idt' => 1,],
            ['cod' => 'D', 'lib' => 'Groupe D', 'CompEdit_Idt' => 1,],
            ['cod' => 'E', 'lib' => 'Groupe E', 'CompEdit_Idt' => 1,],
            ['cod' => 'F', 'lib' => 'Groupe F', 'CompEdit_Idt' => 1,],
            ['cod' => 'G', 'lib' => 'Groupe G', 'CompEdit_Idt' => 1,],
            ['cod' => 'H', 'lib' => 'Groupe H', 'CompEdit_Idt' => 1,],

            ['cod' => 'A', 'lib' => 'Groupe A', 'CompEdit_Idt' => 2,],
            ['cod' => 'B', 'lib' => 'Groupe B', 'CompEdit_Idt' => 2,],
            ['cod' => 'C', 'lib' => 'Groupe C', 'CompEdit_Idt' => 2,],
            ['cod' => 'D', 'lib' => 'Groupe D', 'CompEdit_Idt' => 2,],
            ['cod' => 'E', 'lib' => 'Groupe E', 'CompEdit_Idt' => 2,],
            ['cod' => 'F', 'lib' => 'Groupe F', 'CompEdit_Idt' => 2,],
            ['cod' => 'G', 'lib' => 'Groupe G', 'CompEdit_Idt' => 2,],
            ['cod' => 'H', 'lib' => 'Groupe H', 'CompEdit_Idt' => 2,],
        ]);
    }
}
