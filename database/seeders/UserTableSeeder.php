<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create(
            [
                'name' => 'anisa',
                'username' => 'annisa',
                'email' => 'anisa@admin.com',
                'password' => Hash::make('admin1234'),            
            ]
        );
    }
}
