<?php

use Illuminate\Database\Seeder;

class StadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Stade')->insert([
            ['Nom' => 'Ali Sami Yen Spor Kompleksi', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Galatasaray'),],
            ['Nom' => 'Anfield', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Liverpool'),],
            ['Nom' => 'BayArena', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Leverkusen'),],
            ['Nom' => 'BVB Stadion Dortmund', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Dortmund'),],
            ['Nom' => 'Camp de Mestalla', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Valencia'),],
            ['Nom' => 'Camp Nou', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Barcelona'),],
            ['Nom' => 'City of Manchester Stadium', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Man. City'),],
            ['Nom' => 'Eden Arena', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Slavia Praha'),],
            ['Nom' => 'Estádio do Sport Lisboa e Benfica', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Benfica'),],
            ['Nom' => 'Estadio Metropolitano', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Atlético'),],
            ['Nom' => 'Estadio Santiago Bernabéu', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Real Madrid'),],
            ['Nom' => 'Football Arena Munich', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Bayern'),],
            ['Nom' => 'Jan Breydelstadion', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Club Brugge'),],
            ['Nom' => 'Johan Cruijff Arena', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Ajax'),],
            ['Nom' => 'Juventus Stadium', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Juventus'),],
            ['Nom' => 'KRC Genk Arena', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Genk'),],
            ['Nom' => 'OL Stadium', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Lyon'),],
            ['Nom' => 'OSK Metalist Stadion', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Shakhtar Donetsk'),],
            ['Nom' => 'Parc des Princes', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Paris'),],
            ['Nom' => 'RB Arena', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Leipzig'),],
            ['Nom' => 'Red Bull Arena', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Salzburg'),],
            ['Nom' => 'Saint Petersburg Stadium', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Zenit'),],
            ['Nom' => 'Stade Pierre Mauroy', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('LOSC'),],
            ['Nom' => 'Stadio Georgios Karaiskakis', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Olympiacos'),],
            ['Nom' => 'Stadio San Paolo', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Napoli'),],
            ['Nom' => 'Stadio San Siro', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Atalanta'),],
            ['Nom' => 'Stadio San Siro', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Internazionale'),],
            ['Nom' => 'Stadion Lokomotiv', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Lokomotiv Moskva'),],
            ['Nom' => 'Stadion Maksimir', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Dinamo Zagreb'),],
            ['Nom' => 'Stadion Rajko Mitić', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Crvena zvezda'),],
            ['Nom' => 'Stamford Bridge', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Chelsea'),],
            ['Nom' => 'Tottenham Hotspur Stadium', 'Ville_Idt' => App\Equipe::GetVilleIdtByNom('Tottenham'),],
        ]);
    }
}
