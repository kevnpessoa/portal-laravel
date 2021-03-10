<?php

namespace Database\Factories;

use App\Models\UserAccess;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserAccessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserAccess::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 5000),
            'last_login' => date("Y-m-d H:i:s", mt_rand(1583781092, 1615317092))
        ];
    }
}
