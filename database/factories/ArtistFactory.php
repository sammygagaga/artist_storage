<?php

namespace Database\Factories;

use App\Enum\ArtistsGenres;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{

    public function definition(): array
    {
        return [
           'nickname'=> $this->faker->name(),
           'email' =>$this->faker->email(),
           'purchased'=>$this->faker->numberBetween(0,50),
           'rating'=>$this->faker->numberBetween(1,5),
           'genre'=>$this->faker->randomElement([ArtistsGenres::Detroit,ArtistsGenres::Milwaukee])
        ];
    }
}
