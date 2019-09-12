<?php

use Illuminate\Database\Seeder;

class VilleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('ville')->insert([
            ['nom' => 'Amsterdam', 'nation_cod' => 'NED',],
            ['nom' => 'Barcelone', 'nation_cod' => 'ESP',],
            ['nom' => 'Belgrade', 'nation_cod' => 'SRB',],
            ['nom' => 'Bruges', 'nation_cod' => 'BEL',],
            ['nom' => 'Décines', 'nation_cod' => 'FRA',],
            ['nom' => 'Dortmund', 'nation_cod' => 'GER',],
            ['nom' => 'Genk', 'nation_cod' => 'BEL',],
            ['nom' => 'Istanbul', 'nation_cod' => 'TUR',],
            ['nom' => 'Kharkiv', 'nation_cod' => 'UKR',],
            ['nom' => 'Le Pirée', 'nation_cod' => 'GRE',],
            ['nom' => 'Leipzig', 'nation_cod' => 'GER',],
            ['nom' => 'Leverkusen', 'nation_cod' => 'GER',],
            ['nom' => 'Lisbonne', 'nation_cod' => 'POR',],
            ['nom' => 'Liverpool', 'nation_cod' => 'ENG',],
            ['nom' => 'Londres', 'nation_cod' => 'ENG',],
            ['nom' => 'Madrid', 'nation_cod' => 'ESP',],
            ['nom' => 'Manchester', 'nation_cod' => 'ENG',],
            ['nom' => 'Milan', 'nation_cod' => 'ITA',],
            ['nom' => 'Moscou', 'nation_cod' => 'RUS',],
            ['nom' => 'Munich', 'nation_cod' => 'GER',],
            ['nom' => 'Naples', 'nation_cod' => 'ITA',],
            ['nom' => 'Paris', 'nation_cod' => 'FRA',],
            ['nom' => 'Prague', 'nation_cod' => 'CZE',],
            ['nom' => 'Saint-Pétersbourg', 'nation_cod' => 'RUS',],
            ['nom' => 'Salzbourg', 'nation_cod' => 'AUT',],
            ['nom' => 'Turin', 'nation_cod' => 'ITA',],
            ['nom' => 'Valence', 'nation_cod' => 'ESP',],
            ['nom' => 'Villeneuve d\'Ascq', 'nation_cod' => 'FRA',],
            ['nom' => 'Zagreb', 'nation_cod' => 'CRO',], 
        ]);
    }
}
