<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use Faker\Generator as Faker;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence,
            'body'=>$this->faker->paragraph,
            'author_id'=>User::all(['id'])->random(),
            'category_id'=>Category::all(['id'])->random(),
            'image'=>$this->faker->image(public_path().'/images/', 200, 200, null, false)
        ];
    }
}
