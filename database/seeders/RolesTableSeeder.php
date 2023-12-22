<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'sales', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Jojo', 'email' => 'jojo@gmail.com', 'password' => bcrypt('jojo123'), 'role_id' => 1, 'employee_id' => 20202020],
            ['id' => 2, 'name' => 'Mifat', 'email' => 'mifat@gmail.com', 'password' => bcrypt('mifat123'), 'role_id' => 2, 'employee_id' => 10202020],
            ['id' => 3, 'name' => 'Audi', 'email' => 'audi@gmail.com', 'password' => bcrypt('audi123'), 'role_id' => 2, 'employee_id' => 10202021],
        ]);

        DB::table('orders')->insert([
            ['gramature' => 45, 'coresta' => 90, 'quantity' => 60, 'user_id' => 2, 'date_order' => now()],
            ['gramature' => 45, 'coresta' => 90, 'quantity' => 700, 'user_id' => 2, 'date_order' => now()],
            ['gramature' => 45, 'coresta' => 90, 'quantity' => 600, 'user_id' => 1, 'date_order' => now()],
        ]);
    }
}