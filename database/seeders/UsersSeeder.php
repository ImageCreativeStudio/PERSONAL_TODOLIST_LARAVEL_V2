<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
    * Run the database seeds.
    */
    public function run(): void
    {
        //Crea un usuario de prueba en la BD
        $user = new User;
        $user->name = "Administrador";
        $user->email = "admin@example.com";
        $user->password = Hash::make('password');
        $user->save();
    }
}
