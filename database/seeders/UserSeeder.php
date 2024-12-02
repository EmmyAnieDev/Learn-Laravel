<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'John Doe', 'email' => 'john@gmail.com', 'password' => '12345678'],
            ['name' => 'Mike Tyson', 'email' => 'mike@gmail.com', 'password' => '123456'],
            ['name' => 'Tommy Egan', 'email' => 'tommy@gmail.com', 'password' => '123456'],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => bcrypt($user['password']),
            ]);
        }
    }
}
