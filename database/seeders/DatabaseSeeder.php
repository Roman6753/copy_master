<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'surname' => 'Admin',
            'patronymic' => 'Adminovich',
            'login' => 'admin',
            'email' => 'admin@copymaster.ru',
            'password' => Hash::make('admin00'),
            'is_admin' => true,
        ]);

        User::factory(10)->create();
        Category::factory(30)->create();
    }
}