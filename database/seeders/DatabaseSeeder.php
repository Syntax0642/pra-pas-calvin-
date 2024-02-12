<?php

namespace Database\Seeders;
use App\Models\tikerorang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\Ticket::factory(10)->create();


        tikerorang::create([
            "tiketperorang" => "5 orang"
        ]);
        tikerorang::create([
            "tiketperorang" => "4 orang"
        ]);
        tikerorang::create([
            "tiketperorang" => "3 orang"
        ]);
        tikerorang::create([
            "tiketperorang" => "2 orang"
        ]);
        tikerorang::create([
            "tiketperorang" => "1 orang"
        ]);

    }
}
