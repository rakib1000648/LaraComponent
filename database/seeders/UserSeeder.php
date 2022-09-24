<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ratul',
            'email' => 'test@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        Contact::create([
            'user_id' => 1,
            'address' => 'kajla',
            'phone' => '0176543465'
        ]);
    }
}
