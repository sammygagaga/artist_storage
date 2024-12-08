<?php

namespace App\Services\DTO;

use App\Enum\ArtistsGenres;
use Spatie\LaravelData\Data;

class CreateArtistData extends Data
{
    public string $nickname;
    public string $email;
    public int $purchase_count;
    public int $rating;
    public ArtistsGenres $genre;
}
