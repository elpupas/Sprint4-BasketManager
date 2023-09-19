<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user1 = User::create([
            'name' => 'player',
            'email' => 'player@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(10),
        ]);
        $user2 = User::create([
            'name' => 'player2',
            'email' => 'player2@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(10),
        ]);

        $user1->teams()->createMany([
            [
                'name' => 'Equipo 1',
                'coach' => 'Entrenador 1',
                'stadium' => 'Estadio 1',
                'players' => 20,
                'established_year' => 1990,
            ],
            [
                'name' => 'Equipo 2',
                'coach' => 'Entrenador 2',
                'stadium' => 'Estadio 2',
                'players' => 25,
                'established_year' => 2000,
            ],

        ]);
        $user2->teams()->createMany([
            [
                'name' => 'Frachis',
                'coach' => 'joana 1',
                'stadium' => 'it 1',
                'players' => 20,
                'established_year' => 1990,
            ],
            [
                'name' => 'bolu2',
                'coach' => 'juan andres ',
                'stadium' => 'Estadio 2',
                'players' => 25,
                'established_year' => 2000,
            ],

        ]);

    }
}
