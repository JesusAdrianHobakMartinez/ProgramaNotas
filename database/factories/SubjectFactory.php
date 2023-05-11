<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     //estas son las caracteristicas de como seran los datos que se anexaran
    public function definition(): array
    {
        return [
            'nombre'=>fake()->sentence(5), //genera un enunciado
            'clave'=>fake()->bothify('???-####'), //los que tienen ? los cambia por letras y los # por numeros
            'ing'=>fake()->randomElement(['isc','ier','iem','ii','ie']), //le mando el array de los 5 elementos que puede tomar
            'semestre'=>fake()->randomDigitNotNull() //que regrese un digito que no sea nulo
        ];
    }
}
