<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alamgir',
            'email' => 'phuocpham1988@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'administrator'
        ]);
        User::create([
            'name' => 'Phuoc Pham',
            'email' => 'phuocpham@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'administrator'
        ]);
    }
}
