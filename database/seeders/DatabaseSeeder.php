<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmial.com',
            'password' => 'johndoe123'
        ]);

        \App\Models\Listing::factory(5)->create([
            'user_id' => $user->id
        ]);

//         \App\Models\User::factory()->create([
//             'name' => 'Admin User',
//             'email' => 'admin@admin.com',
//
//         ]);
    }
}
