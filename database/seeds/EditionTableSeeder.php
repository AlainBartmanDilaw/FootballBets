<?php

use Illuminate\Database\Seeder;

class EditionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('edition')->insert([
            'cod' => '49',
            'lib' => '49ème édition',
        ]);
        DB::table('edition')->insert([
            'cod' => '66',
            'lib' => '66ème édition',
        ]);
    }
}
