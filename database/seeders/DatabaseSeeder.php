<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'surname'=> 'Скайуокер',
            'name' => 'Энакин',
            'login' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin11'),
            'admin' => true,
        ]);

        Category::create([
            'title' => 'Лазерные принтеры'
        ]);
        Category::create([
            'title' => 'Струйные принтеры'
        ]);
        Category::create([
            'title' => 'Термопринтеры'
        ]);
    }
}
