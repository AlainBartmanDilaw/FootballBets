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
        // Table::select('name','surname')->where('id', 1)->get();
        DB::table('Equipe')->insert([
            ['Nom' => 'Ajax', 'NomLng' => 'Ajax', 'Ville_Idt' => App\Ville::GetIdtByNom('Amsterdam'), 'Nation_Cod' => 'NED',],
            ['Nom' => 'Atalanta', 'NomLng' => 'Atalanta', 'Ville_Idt' => App\Ville::GetIdtByNom('Milan'), 'Nation_Cod' => 'ITA',],
            ['Nom' => 'Atlético', 'NomLng' => 'Atlético', 'Ville_Idt' => App\Ville::GetIdtByNom('Madrid'), 'Nation_Cod' => 'ESP',],
            ['Nom' => 'Barcelona', 'NomLng' => 'Barcelona', 'Ville_Idt' => App\Ville::GetIdtByNom('Barcelone'), 'Nation_Cod' => 'ESP',],
            ['Nom' => 'Bayern', 'NomLng' => 'Bayern', 'Ville_Idt' => App\Ville::GetIdtByNom('Munich'), 'Nation_Cod' => 'GER',],
            ['Nom' => 'Benfica', 'NomLng' => 'Benfica', 'Ville_Idt' => App\Ville::GetIdtByNom('Lisbonne'), 'Nation_Cod' => 'POR',],
            ['Nom' => 'Chelsea', 'NomLng' => 'Chelsea', 'Ville_Idt' => App\Ville::GetIdtByNom('Londres'), 'Nation_Cod' => 'ENG',],
            ['Nom' => 'Club Brugge', 'NomLng' => 'Club Brugge', 'Ville_Idt' => App\Ville::GetIdtByNom('Bruges'), 'Nation_Cod' => 'BEL',],
            ['Nom' => 'Crvena zvezda', 'NomLng' => 'Crvena zvezda', 'Ville_Idt' => App\Ville::GetIdtByNom('Belgrade'), 'Nation_Cod' => 'SRB',],
            ['Nom' => 'Dinamo Zagreb', 'NomLng' => 'Dinamo Zagreb', 'Ville_Idt' => App\Ville::GetIdtByNom('Zagreb'), 'Nation_Cod' => 'CRO',],
            ['Nom' => 'Dortmund', 'NomLng' => 'Dortmund', 'Ville_Idt' => App\Ville::GetIdtByNom('Dortmund'), 'Nation_Cod' => 'GER',],
            ['Nom' => 'Galatasaray', 'NomLng' => 'Galatasaray', 'Ville_Idt' => App\Ville::GetIdtByNom('Istanbul'), 'Nation_Cod' => 'BEL',],
            ['Nom' => 'Genk', 'NomLng' => 'Genk', 'Ville_Idt' => App\Ville::GetIdtByNom('Genk'), 'Nation_Cod' => 'BEL',],
            ['Nom' => 'Internazionale', 'NomLng' => 'Internazionale', 'Ville_Idt' => App\Ville::GetIdtByNom('Milan'), 'Nation_Cod' => 'ITA',],
            ['Nom' => 'Juventus', 'NomLng' => 'Juventus', 'Ville_Idt' => App\Ville::GetIdtByNom('Turin'), 'Nation_Cod' => 'ITA',],
            ['Nom' => 'Leipzig', 'NomLng' => 'Leipzig', 'Ville_Idt' => App\Ville::GetIdtByNom('Leipzig'), 'Nation_Cod' => 'GER',],
            ['Nom' => 'Leverkusen', 'NomLng' => 'Leverkusen', 'Ville_Idt' => App\Ville::GetIdtByNom('Leverkusen'), 'Nation_Cod' => 'GER',],
            ['Nom' => 'Liverpool', 'NomLng' => 'Liverpool', 'Ville_Idt' => App\Ville::GetIdtByNom('Liverpool'), 'Nation_Cod' => 'ENG',],
            ['Nom' => 'Lokomotiv Moskva', 'NomLng' => 'Lokomotiv Moskva', 'Ville_Idt' => App\Ville::GetIdtByNom('Moscou'), 'Nation_Cod' => 'RUS',],
            ['Nom' => 'LOSC', 'NomLng' => 'LOSC', 'Ville_Idt' => App\Ville::GetIdtByNom('Villeneuve d\'Ascq'), 'Nation_Cod' => 'FRA',],
            ['Nom' => 'Lyon', 'NomLng' => 'Lyon', 'Ville_Idt' => App\Ville::GetIdtByNom('Décines'), 'Nation_Cod' => 'FRA',],
            ['Nom' => 'Man. City', 'NomLng' => 'Man. City', 'Ville_Idt' => App\Ville::GetIdtByNom('Manchester'), 'Nation_Cod' => 'ENG',],
            ['Nom' => 'Napoli', 'NomLng' => 'Napoli', 'Ville_Idt' => App\Ville::GetIdtByNom('Naples'), 'Nation_Cod' => 'ITA',],
            ['Nom' => 'Olympiacos', 'NomLng' => 'Olympiacos', 'Ville_Idt' => App\Ville::GetIdtByNom('Le Pirée'), 'Nation_Cod' => 'GRE',],
            ['Nom' => 'Paris', 'NomLng' => 'Paris', 'Ville_Idt' => App\Ville::GetIdtByNom('Paris'), 'Nation_Cod' => 'FRA',],
            ['Nom' => 'Real Madrid', 'NomLng' => 'Real Madrid', 'Ville_Idt' => App\Ville::GetIdtByNom('Madrid'), 'Nation_Cod' => 'ESP',],
            ['Nom' => 'Salzburg', 'NomLng' => 'Salzburg', 'Ville_Idt' => App\Ville::GetIdtByNom('Salzbourg'), 'Nation_Cod' => 'AUT',],
            ['Nom' => 'Shakhtar Donetsk', 'NomLng' => 'Shakhtar Donetsk', 'Ville_Idt' => App\Ville::GetIdtByNom('Kharkiv'), 'Nation_Cod' => 'UKR',],
            ['Nom' => 'Slavia Praha', 'NomLng' => 'Slavia Praha', 'Ville_Idt' => App\Ville::GetIdtByNom('Prague'), 'Nation_Cod' => 'CZE',],
            ['Nom' => 'Tottenham', 'NomLng' => 'Tottenham', 'Ville_Idt' => App\Ville::GetIdtByNom('Londres'), 'Nation_Cod' => 'ENG',],
            ['Nom' => 'Valencia', 'NomLng' => 'Valencia', 'Ville_Idt' => App\Ville::GetIdtByNom('Valence'), 'Nation_Cod' => 'ESP',],
            ['Nom' => 'Zenit', 'NomLng' => 'Zenit', 'Ville_Idt' => App\Ville::GetIdtByNom('Saint-Pétersbourg'), 'Nation_Cod' => 'RUS',],
        ]);
    }
}
