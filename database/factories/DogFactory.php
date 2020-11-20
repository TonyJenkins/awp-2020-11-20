<?php

namespace Database\Factories;

use App\Models\Dog;
use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\Factory;

class DogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $owners = Owner::all ();

        return [
            'name'=>$this->faker->firstName,
            'bio'=>$this->faker->paragraph (4, true),
            'owner_id'=>$owners->random ()->id,
        ];
    }
}
