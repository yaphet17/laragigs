<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
         \App\Models\User::factory(10)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'Admin User',
//             'email' => 'admin@admin.com',
//
//         ]);
         \App\Models\Listing::create([
             'title' => 'Laravel Senior Developer',
             'tags' => 'laravel, javascript',
             'company' => 'Acme Corp',
             'location' => 'Boston, MA',
             'email' => 'email1@email.com',
             'website' => 'https://www.acme.com',
             'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
         ]);
    }
}
