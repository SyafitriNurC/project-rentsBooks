<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // Role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data =[
        //     'admin', 
        //     'client',
        // ];
        // foreach($data as $value)
        // {
        //     Role::insert([
        //         'name' => $value
        //     ]);
           
        // }

        DB::table('users')->insert([
            [
                'name' => 'rosa',
                'email' => 'rosa@gmail.com',
                'no_hp' => '083897217292',
                'address' => 'cisarua',
                'password' => Hash::make('rosa123'),
                'role_id' => 1,
            ],
            [
                'name' => 'rosi',
                'email' => 'rosi@gmail.com',
                'no_hp' => '083897217292',
                'address' => 'cibedug',
                'password' => Hash::make('rosi123'),
                'role_id' => 2,
            ],
        ]);
    }
}
