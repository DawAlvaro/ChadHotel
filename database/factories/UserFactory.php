<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $number = 0;

        $roles = array(
            'Customer',
            'Admin',
            'Super'
        );

        $gender = array(
            'Male',
            'Female'
        );

        $avatar = array(
            'https://images.unsplash.com/photo-1531727991582-cfd25ce79613?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&w=300',
            'https://images.unsplash.com/photo-1511485977113-f34c92461ad9?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&w=300',
            'https://images.unsplash.com/photo-1574108233269-86d1199d28de?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&w=300',
            'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&w=300',
            'https://images.unsplash.com/photo-1530785602389-07594beb8b73?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=300&w=300'
        );

        $array_user = [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->numberBetween(34666666666,34999999999),
            'email_verified_at' => now(),
            'role' => $roles[array_rand($roles)],
            'gender' => $gender[array_rand($gender)],
            'password' => Hash::make('admin'), // password
            'remember_token' => Str::random(10),
            'random_key' => Str::random(60),
            'avatar' => $avatar[$number],
        ];

        $number++;

        return $array_user;
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    public function isCustomer()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'Customer',
            ];
        });
    }
}
