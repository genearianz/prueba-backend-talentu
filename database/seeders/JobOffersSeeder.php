<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobOffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('job_offers')->insert([
            0 => [
                'name' => 'Desarrollador Fronent',
                'status' => true
            ],
            1 => [
                'name' => 'Desarrollador Backend',
                'status' => true
            ],
            2 => [
                'name' => 'DevOps',
                'status' => true
            ]
        ]);
    }
}
