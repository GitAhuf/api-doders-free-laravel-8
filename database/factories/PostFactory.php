<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(20);

        // Metodo slug recibe una cadena slug('Hola mundo como estas') | retorna => hola-mundo-como-estas
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'extract' => $this->faker->text(200),
            'body' => $this->faker->text(1000),
            'status' => $this->faker->randomElement([Post::BORRADOR, Post::PUBLICADO]),
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id
        ];
    }
}
