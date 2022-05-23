<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'username'=>'admin',
            'no_telepon'=>'000000',
            'password'=>bcrypt('admin123'),
            'level'=>'admin',

        ]);

        



        
        DB::table('users')->insert([
            'name'=>'agnes',
            'email'=>'agnes@gmail.com',
            'username'=>'agnes',
            'no_telepon'=>'08128919293',
            'password'=>bcrypt('tarutung'),
            'level'=>'petugas',

        ]);

    }
}
