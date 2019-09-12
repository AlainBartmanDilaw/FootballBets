<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            CompetitionTableSeeder::class,
            EditionTableSeeder::class,
            NationTableSeeder::class,
            PhaseTableSeeder::class,
            JourneeTableSeeder::class,
            DateJourneeTableSeeder::class,
            VilleTableSeeder::class,
            EquipeTableSeeder::class,
            CompEditTableSeeder::class,
            GroupeTableSeeder::class,
            EquipeGroupeTableSeeder::class,
            StadeTableSeeder::class,
        ]);
    }
}
