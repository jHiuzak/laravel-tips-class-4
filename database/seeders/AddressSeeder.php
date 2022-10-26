<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert(
[
                'user_id' => 2,
                'city' => 'João Pessoa',
                'number' => 183,
                'state' => 'PB',
                'street' => 'Rua da Faculdade'
        ]);
    }
}
