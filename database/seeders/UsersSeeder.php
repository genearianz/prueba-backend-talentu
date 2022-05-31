<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            0 => [
                'name' => 'Ana Medina',
                'password' => '$2a$12$/MOO8NwJrYsFjmLGOFUbceODW2BFjVs6ezJnxkwU4ewoCdVnSVeCi',
                'dni_type' => 'V-',
                'dni' => 78654321,
                'email' => 'ana@medina.com',
            ],
            1 => [
                'name' => 'Daniel Mendoza',
                'password' => '$2a$12$/MOO8NwJrYsFjmLGOFUbceODW2BFjVs6ezJnxkwU4ewoCdVnSVeCi',
                'dni_type' => 'V-',
                'dni' => 78955200,
                'email' => 'daniel@mmendoza.com',
            ],
            2 => [
                'name' => 'Angel Ramos',
                'password' => '$2a$12$/MOO8NwJrYsFjmLGOFUbceODW2BFjVs6ezJnxkwU4ewoCdVnSVeCi',
                'dni_type' => 'V-',
                'dni' => 11235560,
                'email' => 'angel@ramos.com',
            ]
        ]);
    }
}
