<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Club;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('clubs')->truncate();
        Schema::enableForeignKeyConstraints();

        $clubs = [
            [
                'stadiums_id'   => '1',
                'name'          => 'Chelsea FC',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
                'url'           => 'www.chelseafc.com',
                'thropy'        => 19,
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'stadiums_id'   => '2',
                'name'          => 'Arsenal',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t3.svg',
                'url'           => 'www.arsenal.com',
                'thropy'        => 8,
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'stadiums_id'   => '3',
                'name'          => 'Manchester United',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t1.svg',
                'url'           => 'www.manutd.com',
                'thropy'        => 20,
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'stadiums_id'   => '4',
                'name'          => 'Manchester City',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t43.svg',
                'url'           => 'www.mancity.com',
                'thropy'        => 12,
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'stadiums_id'   => '5',
                'name'          => 'Liverpool',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t14.svg',
                'url'           => 'www.liverpoolfc.com',
                'thropy'        => 11,
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'stadiums_id'   => '6',
                'name'          => 'Tottenham Hotspur',
                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t6.svg',
                'url'           => 'www.tettenhamhotspur.com',
                'thropy'        => 1,
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
        ];

        Club::insert($clubs);
    }
}
