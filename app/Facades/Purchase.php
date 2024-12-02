<?php

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

/**
 *@method static \App\Services\PurchaseService setArtist(\App\Models\Artist| int $artist)
 *@method static \App\Models\Purchase[] add(array $purchase):PurchaseService
 *
 * @see \App\Services\PurchaseService
 *
 */


class Purchase extends Facade
{
    protected static function getFacadeAccessor():string
    {
        return 'purchase';
    }
}
