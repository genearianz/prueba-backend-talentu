<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserOffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('user_offers')->insert([
            0 => [
                'user_id' => 1,
                'offer_id' => 1
            ],
            1 => [
                'user_id' => 2,
                'offer_id' => 1
            ],
            2 => [
                'user_id' => 3,
                'offer_id' => 2
            ]
        ]);
    }
}
