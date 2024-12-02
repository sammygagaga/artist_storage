<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Purchase;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{

    public function run(): void
    {
//        User::factory(2)
//            ->has(
//                Artist::factory(3),'artists')
//            ->has(Purchase::factory(10),'purchases')
//            ->for(User::factory())
//            ->create([
//            'is_admin' => true
//        ]);
        User::factory()->count(5)
            ->has(
                Artist::factory()->count(3)
                ->has(
                    Purchase::factory(rand(1, 3)))
            )->create([
                'is_admin'=>true
            ]);
    }
}
