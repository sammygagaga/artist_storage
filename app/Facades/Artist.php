<?php

namespace App\Facades;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \App\Services\ArtistService setArtist(\App\Models\Artist $artist)
 * @method static \App\Models\Artist[] published(array $fields= ['id','nickname','email','purchased']): Collection
 *
 *
 * @see \App\Services\ArtistService
 */
class Artist extends Facade
{
    protected static function getFacadeAccessor():string
    {
        return 'artist';
    }
}
