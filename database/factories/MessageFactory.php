<?php

namespace Database\Factories;

use App\Models\Mss;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mss::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->sentence(),
            'email'=>$this->faker->sentence(),
            'telefono'=>$this->faker->sentence(),
            'mensaje'=>$this->faker->paragraph()
        ];
    }
}
