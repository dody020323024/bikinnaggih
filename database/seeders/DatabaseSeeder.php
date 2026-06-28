<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        Product::create([
            'name' => 'Keripik Singkong Original',
            'description' => 'Keripik singkong renyah dengan rasa asli yang gurih.',
            'price' => 15000,
            'is_active' => true,
        ]);

        Product::create([
            'name' => 'Keripik Singkong Balado',
            'description' => 'Keripik singkong dengan bumbu balado pedas manis yang bikin nagih.',
            'price' => 17000,
            'is_active' => true,
        ]);

        Product::create([
            'name' => 'Keripik Pisang Coklat',
            'description' => 'Keripik pisang manis dengan taburan bubuk coklat tebal.',
            'price' => 18000,
            'is_active' => true,
        ]);
    }
}
