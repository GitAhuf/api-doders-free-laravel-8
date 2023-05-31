<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
    protected $model = Tag::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()  {
        $name = $this->faker->unique()->word(20);

        // Metodo slug recibe una cadena slug('Hola mundo como estas') | retorna => hola-mundo-como-estas
        return [
            'name' => $name,
            'slug' => Str::slug($name)
        ];
    }
}
