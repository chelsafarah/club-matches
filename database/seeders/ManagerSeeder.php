<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Manager;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate db
        Schema::disableForeignKeyConstraints();
        DB::table('managers')->truncate();
        Schema::enableForeignKeyConstraints();

        $managers = [
            [
                'clubs_id'   => 1,
                'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/man39257.png',
                'name'   => 'Thomas Tuchel',
                'old'   => '47',
                'nationality'   => 'Germany',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 2,
                'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/man51018.png',
                'name'   => 'Mikel Arteta',
                'old'   => '38',
                'nationality'   => 'Spain',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 3,
                'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/man40342.png',
                'name'   => 'Ole Gunnar Solskjaer',
                'old'   => '48',
                'nationality'   => 'Norway',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 4,
                'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/man37974.png',
                'name'   => 'Josep Guardiola',
                'old'   => '50',
                'nationality'   => 'Spain',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 5,
                'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/man279.png',
                'name'   => 'Jurgen Klopp',
                'old'   => '53',
                'nationality'   => 'Germany',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 6,
                'photo'   => 'https://resources.premierleague.com/premierleague/photo/players/250x250/man134.png',
                'name'   => 'Jose Mourinho',
                'old'   => '58',
                'nationality'   => 'Portugal',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
        ];

        Manager::insert($managers);
    }
}
