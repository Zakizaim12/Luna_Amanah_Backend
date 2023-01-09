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
    public function definition()
    {
        return [
            'title' => fake()->sentence(mt_rand(2,8)),
            'harga_paket' => fake()->randomNumber(8,true),
            'jadwal' => fake()->sentence(mt_rand(1,2)),
            'durasi' => fake()->randomNumber(2,true),
            'total_seat' => fake()->randomNumber(2,true),
            'berangkat_dari' => fake()->sentence(mt_rand(1,2)),
            'maskapai' => fake()->sentence(mt_rand(1,2)),
            'hari1' => fake()->sentence(mt_rand(10,15)),
            'hari2' => fake()->sentence(mt_rand(10,15)),
            'hari3' => fake()->sentence(mt_rand(10,15)),
            'hari4' => fake()->sentence(mt_rand(10,15)),
            'hari5' => fake()->sentence(mt_rand(10,15)),
            'hari6' => fake()->sentence(mt_rand(10,15)),
            'hari7' => fake()->sentence(mt_rand(10,15)),
            'hari8' => fake()->sentence(mt_rand(10,15)),
            'hari9' => fake()->sentence(mt_rand(10,15)),
            'hari10' => fake()->sentence(mt_rand(10,15)),
            'hari11' => fake()->sentence(mt_rand(10,15)),
            'hari12' => fake()->sentence(mt_rand(10,15)),
            'hari13' => fake()->sentence(mt_rand(10,15)),
            'hari14' => fake()->sentence(mt_rand(10,15)),
            'hari15' => fake()->sentence(mt_rand(10,15)),
            'hari16' => fake()->sentence(mt_rand(10,15)),
            'slug' =>  fake()->slug(),
            // 'body' => '<p>'.implode('</p><p>',fake()->paragraphs(mt_rand(5,10))).'</p>',
            'body' => collect(fake()->paragraphs(mt_rand(5,10)))->map(fn($p) => "<p>$p</p>") -> implode(''),
            'user_id' => mt_rand(1,1),
            'category_id' => mt_rand(1,3)
        ];
    }
}
