<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Post;
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
        // \App\Models\User::factory(10)->create();
        // $this->call(UserSeeder::class);
        User::factory(10)->create();
        Contact::factory(10)->create();
        Post::factory(100)->create();
    }
}
