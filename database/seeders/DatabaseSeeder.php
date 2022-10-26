<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // DB::table('addresses')->insert(
        //     [
        //         'user_id' => 1,
        //         'city' => 'Canela',
        //         'number' => 145,
        //         'state' => 'RN',
        //         'street' => 'Rua do Outono Alaranjado'
        //     ]
        // );

//         DB::table('addresses')->insert(
// [
//                 'user_id' => 2,
//                 'city' => 'João Pessoa',
//                 'number' => 183,
//                 'state' => 'PB',
//                 'street' => 'Rua da Faculdade'
//         ]);

        $this->call(
 [
            AddressSeeder::class,
        ]);
    }
}
