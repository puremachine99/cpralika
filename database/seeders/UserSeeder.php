<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@ralika.test'], // Cek apakah admin sudah ada
            [
                'name' => 'Admin Ralika',
                'email' => 'admin@ralika.test',
                'password' => Hash::make('admin'), // Default password "admin"
            ]
        );
    }
}
