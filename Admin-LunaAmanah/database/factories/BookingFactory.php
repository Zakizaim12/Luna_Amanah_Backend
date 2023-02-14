<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\booking>
 */
class BookingFactory extends Factory
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
            'user_id' => mt_rand(1,1),
            'nama_depan' => fake()->sentence(mt_rand(1,2)),
            'nama_belakang' => fake()->sentence(mt_rand(1,2)),
            'asal_kota' => fake()->sentence(mt_rand(1,2)),
            'alamat' => fake()->sentence(mt_rand(1,2)),
            'no_hp' => fake()->randomNumber(8,true),
            'nik' => fake()->randomNumber(8,true),
            'tanggal_lahir' => fake()->dateTime(),
            'email' => fake()->sentence(mt_rand(1,2)),
            'status_id' => mt_rand(1,2),
            'radio' => fake()->sentence(mt_rand(1,1)),
            'harga_paket' => fake()->randomNumber(8,true),
        ];
    }
}
