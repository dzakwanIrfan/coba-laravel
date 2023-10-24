<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            // 'body'=> '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5,8))) . '</p>',
            'body' => collect($this->faker->paragraphs(mt_rand(5,8))) 
                        -> map(function ($p) {
                            return "<p>$p</p>";   
                        })
                        ->implode(''),
            'slug' => $this->faker->slug(),
            'excerpt'=> $this->faker->sentence(mt_rand(10,25)),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,3)
        ];
    }
}
