<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'Alvaro Ramirez Escribano',
            'email' => 'daw.alvaro@gmail.com',
            'phone' => 34617214719,
            'avatar' => 'https://images.unsplash.com/photo-1560787313-5dff3307e257?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&w=300',
            'password' => Hash::make('alvaro'),
            'role' => 'Super',
            'gender' => 'Male',
            'random_key' => Str::random(60),
        ]);

        User::factory(4)->create([
            'role' => 'Customer',
        ]);
    }
}
