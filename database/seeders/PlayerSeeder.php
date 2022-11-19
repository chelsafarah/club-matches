<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Player;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $players = [
            [
                'clubs_id'   => 1,
                'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/p165153.png',
                'name'   => 'Timo Werner',
                'height'   => '180',
                'position'   => 'Forward',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 2,
                'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/p184341.png',
                'name'   => 'Mason Mount',
                'height'   => '178',
                'position'   => 'Midfielder',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 3,
                'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/p184029.png',
                'name'   => 'Martin Odegaard',
                'height'   => '178',
                'position'   => 'Midfielder',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 4,
                'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/p182539.png',
                'name'   => 'Dani Ceballos',
                'height'   => '179',
                'position'   => 'Midfielder',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 5,
                'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/p106760.png',
                'name'   => 'Luke Shaw',
                'height'   => '185',
                'position'   => 'Defender',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 6,
                'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/p141746.png',
                'name'   => 'Bruno Fernandes',
                'height'   => '179',
                'position'   => 'Midfielder',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            // [
            //     'clubs_id'   => 7,
            //     'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/p121160.png',
            //     'name'   => 'Ederson',
            //     'height'   => '188',
            //     'position'   => 'GoalKeeper',
            //     'created_at'    => '2021-03-21 00:00:00',
            //     'updated_at'    => '2021-03-21 00:00:00',
            // ],
            // [
            //     'clubs_id'   => 8,
            //     'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/p103025.png',
            //     'name'   => 'Riyard Mahrez',
            //     'height'   => '179',
            //     'position'   => 'Forward',
            //     'created_at'    => '2021-03-21 00:00:00',
            //     'updated_at'    => '2021-03-21 00:00:00',
            // ],
            // [
            //     'clubs_id'   => 9,
            //     'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/p194634.png',
            //     'name'   => 'Diogo OdeJotagaard',
            //     'height'   => '178',
            //     'position'   => 'Forward',
            //     'created_at'    => '2021-03-21 00:00:00',
            //     'updated_at'    => '2021-03-21 00:00:00',
            // ],
            // [
            //     'clubs_id'   => 10,
            //     'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/p97032.png',
            //     'name'   => 'Virgil van Dijk',
            //     'height'   => '193',
            //     'position'   => 'Defender',
            //     'created_at'    => '2021-03-21 00:00:00',
            //     'updated_at'    => '2021-03-21 00:00:00',
            // ],
            // [
            //     'clubs_id'   => 11,
            //     'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/p36903.png',
            //     'name'   => 'Gareth Bale',
            //     'height'   => '185',
            //     'position'   => 'Forward',
            //     'created_at'    => '2021-03-21 00:00:00',
            //     'updated_at'    => '2021-03-21 00:00:00',
            // ],
            // [
            //     'clubs_id'   => 12,
            //     'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/p199249.png',
            //     'name'   => 'Sergio Reguilon Fernandes',
            //     'height'   => '178',
            //     'position'   => 'Defender',
            //     'created_at'    => '2021-03-21 00:00:00',
            //     'updated_at'    => '2021-03-21 00:00:00',
            // ],
        ];

        Player::insert($players);
    }
}
