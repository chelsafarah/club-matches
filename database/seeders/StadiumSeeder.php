<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stadium;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class StadiumSeeder extends Seeder
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
        DB::table('stadiums')->truncate();
        Schema::enableForeignKeyConstraints();

        $stadiums = [
            [
                'name'     => 'Chelsea FC',
                'capacity' => 40000,
                'address'  => 'Stanford Bridge, Fulham Road, London, SW8 1HS',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'name'     => 'Emirates Stadium',
                'capacity' => 60000,
                'address'  => 'Highbury House, 75 Drayton Park, London, N5 1BU',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'name'     => 'Old Trafford',
                'capacity' => 74000,
                'address'  => 'Sir Matt Busby Way, Old Trafford, Manchester, M16 0RA',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'name'     => 'Etihad Stadium',
                'capacity' => 55000,
                'address'  => 'Etihad Stadium, Etihad Campus, Mancherster, M11 3FF',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'name'     => 'Anfield FC',
                'capacity' => 53000,
                'address'  => 'Anfield, Anfield Road, Liverpool, L4 0TH',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
            [
                'name'     => 'Ttottenham Hotspur Stadium',
                'capacity' => 62000,
                'address'  => 'Lilywhite House, 782 High Road, Tottenham, London, N17 0BX',
                'created_at'    => '2021-03-21 00:00:00',
                'updated_at'    => '2021-03-21 00:00:00',
            ],
        ];

        Stadium::insert($stadiums);
    }
}
