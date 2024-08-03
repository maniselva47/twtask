<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Article;
use App\Models\Comment;
use Faker\Generator as Faker;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comment'=>$this->faker->sentence,
            'author_id'=>User::all(['id'])->random(),
            'article_id'=>Article::all(['id'])->random()
        ];
    }
}
