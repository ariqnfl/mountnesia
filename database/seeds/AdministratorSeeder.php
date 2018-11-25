<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => "admin",
           'email' => 'admin@admin.com',
           'password' => bcrypt('admin123'),
            'user_type' => "admin"
        ]);
    }
}
