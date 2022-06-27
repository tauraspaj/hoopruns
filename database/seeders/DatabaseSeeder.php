<?php

namespace Database\Seeders;

use App\Models\Tournament;
use Carbon\Carbon;
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
        Tournament::truncate();
        
        Tournament::create([
            'title' => 'World Championship',
            'location' => 'Guildford, Surrey Sports Park',
            'slug' => 'world-championship',
            'access' => 'Public',
            'team_limit' => 8,
            'time' => Carbon::create('2022', '7', '16', '13')
        ]);

        Tournament::create([
            'title' => 'TALEX Cup Invitational #1',
            'location' => 'Guildford, Surrey Sports Park',
            'slug' => 'talex-cup-invitational-1',
            'access' => 'Public',
            'team_limit' => 6,
            'time' => Carbon::create('2022', '7', '30', '13')
        ]);
    }
}
