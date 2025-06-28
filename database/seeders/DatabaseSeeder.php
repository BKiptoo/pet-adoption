<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //    $this->call(CountryTableSeeder::class);
        User::factory()->create();
        // Admin::factory()->create();
        // $this->call(NotificationTableSeeder::class);
        // $this->call(PermissionTableSeeder::class);
    }
}
