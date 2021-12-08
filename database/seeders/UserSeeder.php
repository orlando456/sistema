<?php

namespace Database\Seeders;
use App\Models\User;
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
            'name' => 'Orlando',
            'email' => 'orlandoamarulecona@gmail.com',
            'password' => bcrypt('123456789'),
            'name' => 'pedro',
            'email' => 'pedro@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('admin');

        User::factory(9)->create();

        //
    }
}
