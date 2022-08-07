<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
// protected $model = Curso::class; 

    public function definition()
    {
        return [
            //
            'name'=>$this->faker->sentence(),
            'categoria'=>$this->faker->paragraph(),
            'description'=>$this->faker->randomElement(['Desarrollo web','Diseño web'])
        ];
    }
}
