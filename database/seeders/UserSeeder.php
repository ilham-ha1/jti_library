<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'admin1',
        //     'username' => 'ilham',
        //     'password' => 12345678,
        // ]);
        
        $user = [
            [
                'name' => 'admin',
                'username' => 'admin',
                'is_admin' => '1',
                'password' => Hash::make(12345678),
            ],
            [
                'name' => 'user',
                'username' => 'user',
                'is_admin' => '0',
                'password' => Hash::make(12345678),
            ]
            ];
            foreach($user as $key => $value){
                User::create($value);
            }
    }
}
