<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Permission::create(['name' => 'lihat semua pengguna']);
        Permission::create(['name' => 'buat pengguna']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'customer']);

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        CategoryProduct::create([
            'name_category' => 'Fashion',
            'slug' => 'fashion'
        ]);
    }
}