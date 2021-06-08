<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $game = new Game();
            $game->name = $faker->word();
            $game->description = $faker->text();
            $game->save();
        }
    }
}
