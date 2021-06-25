<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(100),
            'text' => $this->faker->realTextBetween(200, 1000),
            'img_preview' => $this->faker->imageUrl(),
            'img_detail' => $this->faker->imageUrl(1280, 960),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
