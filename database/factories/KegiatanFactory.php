<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kegiatan>
 */
class KegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'namaKegiatan' => $this->faker->word(),
            'user_id' => mt_rand(1, 10),
            'gallery_id' => mt_rand(1, 20),
            "excerpt" => $this->faker->paragraph(),
            "tanggal_kegiatan" => now(),
            "keterangan" => $this->faker->paragraph(mt_rand(5, 10)),
        ];
    }
}
