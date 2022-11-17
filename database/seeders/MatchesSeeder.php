<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Matches;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class MatchesSeeder extends Seeder
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
        DB::table('matches')->truncate();
        Schema::enableForeignKeyConstraints();

        $matches = [
            [
                'clubs_id'   => 1,
                'rivals_id'   => 2,
                'schedule'        => '2021-08-25 00:00:00',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 2,
                'rivals_id'   => 1,
                'schedule'        => '2021-09-25 00:00:00',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 3,
                'rivals_id'   => 4,
                'schedule'        => '2021-08-20 00:00:00',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 4,
                'rivals_id'   => 3,
                'schedule'        => '2021-08-21 00:00:00',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 5,
                'rivals_id'   => 6,
                'schedule'        => '2021-08-29 00:00:00',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'clubs_id'   => 6,
                'rivals_id'   => 5,
                'schedule'        => '2021-10-29 00:00:00',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
        ];

        Matches::insert($matches);
    }
}
