<?php

use Illuminate\Database\Seeder;

class EquipeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idt = App\Ville::GetByNom('Amsterdam');
        echo "Identifiant : " . $idt . "\n";

        // Table::select('name','surname')->where('id', 1)->get();
        DB::table('Equipe')->insert([
            ['Nom' => 'Ajax', 'NomLng' => 'Ajax', 'Ville_Idt' => $idt, 'Nation_Cod' => 'NED',],
            // ['Nom' => 'Atalanta', 'NomLng' => 'Atalanta', 'Ville_Idt' => 'Milan', 'Nation_Cod' => 'ITA',],
            // ['Nom' => 'Atlético', 'NomLng' => 'Atlético', 'Ville_Idt' => 'Madrid', 'Nation_Cod' => 'ESP',],
            // ['Nom' => 'Barcelona', 'NomLng' => 'Barcelona', 'Ville_Idt' => 'Barcelone', 'Nation_Cod' => 'ESP',],
            // ['Nom' => 'Bayern', 'NomLng' => 'Bayern', 'Ville_Idt' => 'Munich', 'Nation_Cod' => 'GER',],
            // ['Nom' => 'Benfica', 'NomLng' => 'Benfica', 'Ville_Idt' => 'Lisbonne', 'Nation_Cod' => 'POR',],
            // ['Nom' => 'Chelsea', 'NomLng' => 'Chelsea', 'Ville_Idt' => 'Londres', 'Nation_Cod' => 'ENG',],
            // ['Nom' => 'Club Brugge', 'NomLng' => 'Club Brugge', 'Ville_Idt' => 'Bruges', 'Nation_Cod' => 'BEL',],
            // ['Nom' => 'Crvena zvezda', 'NomLng' => 'Crvena zvezda', 'Ville_Idt' => 'Belgrade', 'Nation_Cod' => 'SRB',],
            // ['Nom' => 'Dinamo Zagreb', 'NomLng' => 'Dinamo Zagreb', 'Ville_Idt' => 'Zagreb', 'Nation_Cod' => 'CRO',],
            // ['Nom' => 'Dortmund', 'NomLng' => 'Dortmund', 'Ville_Idt' => 'Dortmund', 'Nation_Cod' => 'GER',],
            // ['Nom' => 'Galatasaray', 'NomLng' => 'Galatasaray', 'Ville_Idt' => 'Istanbul', 'Nation_Cod' => 'BEL',],
            // ['Nom' => 'Genk', 'NomLng' => 'Genk', 'Ville_Idt' => 'Genk', 'Nation_Cod' => 'BEL',],
            // ['Nom' => 'Internazionale', 'NomLng' => 'Internazionale', 'Ville_Idt' => 'Milan', 'Nation_Cod' => 'ITA',],
            // ['Nom' => 'Juventus', 'NomLng' => 'Juventus', 'Ville_Idt' => 'Turin', 'Nation_Cod' => 'ITA',],
            // ['Nom' => 'Leipzig', 'NomLng' => 'Leipzig', 'Ville_Idt' => 'Leipzig', 'Nation_Cod' => 'GER',],
            // ['Nom' => 'Leverkusen', 'NomLng' => 'Leverkusen', 'Ville_Idt' => 'Leverkusen', 'Nation_Cod' => 'GER',],
            // ['Nom' => 'Liverpool', 'NomLng' => 'Liverpool', 'Ville_Idt' => 'Liverpool', 'Nation_Cod' => 'ENG',],
            // ['Nom' => 'Lokomotiv Moskva', 'NomLng' => 'Lokomotiv Moskva', 'Ville_Idt' => 'Moscou', 'Nation_Cod' => 'RUS',],
            // ['Nom' => 'LOSC', 'NomLng' => 'LOSC', 'Ville_Idt' => 'Villeneuve d\'Ascq', 'Nation_Cod' => 'FRA',],
            // ['Nom' => 'Lyon', 'NomLng' => 'Lyon', 'Ville_Idt' => 'Décines', 'Nation_Cod' => 'FRA',],
            // ['Nom' => 'Man. City', 'NomLng' => 'Man. City', 'Ville_Idt' => 'Manchester', 'Nation_Cod' => 'ENG',],
            // ['Nom' => 'Napoli', 'NomLng' => 'Napoli', 'Ville_Idt' => 'Naples', 'Nation_Cod' => 'ITA',],
            // ['Nom' => 'Olympiacos', 'NomLng' => 'Olympiacos', 'Ville_Idt' => 'Le Pirée', 'Nation_Cod' => 'GRE',],
            // ['Nom' => 'Paris', 'NomLng' => 'Paris', 'Ville_Idt' => 'Paris', 'Nation_Cod' => 'FRA',],
            // ['Nom' => 'Real Madrid', 'NomLng' => 'Real Madrid', 'Ville_Idt' => 'Madrid', 'Nation_Cod' => 'ESP',],
            // ['Nom' => 'Salzburg', 'NomLng' => 'Salzburg', 'Ville_Idt' => 'Salzbourg', 'Nation_Cod' => 'AUT',],
            // ['Nom' => 'Shakhtar Donetsk', 'NomLng' => 'Shakhtar Donetsk', 'Ville_Idt' => 'Kharkiv', 'Nation_Cod' => 'UKR',],
            // ['Nom' => 'Slavia Praha', 'NomLng' => 'Slavia Praha', 'Ville_Idt' => 'Prague', 'Nation_Cod' => 'CZE',],
            // ['Nom' => 'Tottenham', 'NomLng' => 'Tottenham', 'Ville_Idt' => 'Londres', 'Nation_Cod' => 'ENG',],
            // ['Nom' => 'Valencia', 'NomLng' => 'Valencia', 'Ville_Idt' => 'Valence', 'Nation_Cod' => 'ESP',],
            // ['Nom' => 'Zenit', 'NomLng' => 'Zenit', 'Ville_Idt' => 'Saint-Pétersbourg', 'Nation_Cod' => 'RUS',],
        ]);
    }
}
