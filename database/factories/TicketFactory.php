<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pesanan' => $this->faker->word,
            'nama_pemesan' => $this->faker->name,
            'berangkat_dari' => $this->faker->city,
            'destinasi' => $this->faker->city,
            'tipe_pesanan' => $this->faker->word,
            'nama_kendaraan' => $this->faker->word,
            'kode_pesanan' => $this->faker->randomNumber(),
            'tiket_orang' => $this->faker->numberBetween(1-5),
            'harga' => $this->faker->randomFloat(2, 10, 1000),
            'jam_berangkat' => $this->faker->time(),
            'tanggal_pemesanan' => $this->faker->date(),
            'tanggal_berangkat' => $this->faker->date(),
            'tanggal_tiket_hangus' => $this->faker->date(),
        ];
    }
}
