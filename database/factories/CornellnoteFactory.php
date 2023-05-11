<?php
//En el Factory define como es el dato falso
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Topic;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cornellnote>
 */
class CornellnoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //elijiendo un topic random de todos
        $topic=Topic::all()->random();

        return [
            'titulo'=>fake()->sentence(), //genera un enunciado
            'ideas'=>fake()->paragraph(),//los que tienen ? los cambia por letras y los # por numeros
            'notas'=>fake()->paragraph(), //le mando el array de los 5 elementos que puede tomar
            'resumen'=>fake()->sentence(), //que regrese un digito que no sea nulo
            'topic_id'=>$topic
        ];
    }

    
}
