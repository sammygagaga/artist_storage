<?php

namespace App\Services;

use App\Models\Artist;
use App\Models\Purchase;

class PurchaseService
{
    private Artist $artist;
    private Purchase $purchase;

    public function add(array $purchases): PurchaseService
    {
        foreach ($purchases as $purchaseData) {
            $this->artist->purchases()->create([
                'description' => $purchaseData['description'],
                'amount' => $purchaseData['amount'],
                'quantity' => $purchaseData['quantity'],
            ]);
        }
        return $this;
    }
    public function setArtist(Artist| int $artist):PurchaseService
    {
        $this->artist = $artist instanceof Artist
            ? $artist
            : Artist::query()->findOrFail($artist);

        return $this;
    }


}
