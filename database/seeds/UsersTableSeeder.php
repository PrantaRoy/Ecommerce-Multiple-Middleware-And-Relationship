<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=> '1',
            'name'=> 'Admin',
            'phone'=> '0178898922',
            'company_name'=> 'LaravelEcommerce',
            'username'=> 'admin',
            'email'=> 'admin@email.com',
            'password'=> bcrypt('admin11'),



        ]);
        DB::table('users')->insert([
            'role_id'=> '2',
            'name'=> 'Supplier',
            'username'=> 'supplier',
            'email'=> 'supplier@email.com',
            'phone'=> '01988454863',
            'company_name'=> 'Nokia',
            'password'=> bcrypt('supplier11'),

        ]);
    }
}
