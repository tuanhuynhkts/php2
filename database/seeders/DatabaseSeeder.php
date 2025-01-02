<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('provinces')->insert([
            ['name' => 'Hà Nội'],
            ['name' => 'Hồ Chí Minh'],
            ['name' => 'Đà Nẵng'],
            ['name' => 'Hải Phòng'],
            ['name' => 'Cần Thơ'],
        ]);
    }
}
