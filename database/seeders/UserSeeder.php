<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create(['name' => 'admin','email' => 'admin@gmail.com','password' => Hash::make('12345678'),'email_verified_at'=>now(),'avatar' => 'avatar-1.jpg','created_at' => now(),]);
        $user->syncRoles('admin');
    }
}
