<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [
                'title' => 'Fortnite',
                'description' => 'Fortnite è una piattaforma di gioco online del 2017, sviluppato da People Can Fly e pubblicato da Epic Games per console e PC.',
                'thumb' => 'https://i.guim.co.uk/img/media/2df4ac79cb6f21e0bd800ba0a9ef1a19e898580b/164_354_1207_725/master/1207.jpg?width=465&dpr=1&s=none',
                'type_id' => 3
            ],
            [
                'title' => 'Call Of Duty Modern Warfare',
                'description' => 'Call of Duty: Modern Warfare è un videogioco sparatutto in prima persona, sviluppato da Infinity Ward per le piattaforme PlayStation 4, Xbox One e per PC.',
                'thumb' => 'https://imgs.callofduty.com/content/dam/atvi/callofduty/cod-touchui/kronos/common/social-share/social-share-image.jpg',
                'type_id' => 2
            ],
        ];
        foreach ($games as $game) {

            $new_game = new Game();
            $new_game->fill($game);
            $new_game->save();
        }
    }
}
