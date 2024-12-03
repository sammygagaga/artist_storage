<?php

namespace App\Http\Resources\Artist;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;


/**
 *
 * @mixin \App\Models\Artist
 *
 */

class ArtistResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'nickname'=>$this->nickname,
            'email'=>$this->email,
            'rating'=>$this->rating,
            'genre'=>$this->genre,
            'purchased'=>$this->purchases->map(fn(Purchase $purchase)=>
            [
                'id'=> $purchase->id,
                'amount'=>$purchase->amount,
                'description'=>$purchase->description
            ]),
        ];
    }
}
