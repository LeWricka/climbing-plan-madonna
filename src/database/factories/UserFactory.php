<?php

namespace Database\Factories;

use Core\Users\Domain\LaravelUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LaravelUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => 1,
            'name' => 'user_name',
            'email' => 'email@email.com'
        ];
    }
}
