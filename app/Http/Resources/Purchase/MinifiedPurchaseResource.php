<?php

namespace App\Http\Resources\Purchase;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MinifiedPurchaseResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return  [
            'artist_id'=>$this->artist_id,
            'amount'=>$this->amount,
            'quantity'=>$this->quantity,
            'description'=>$this->description
        ];
    }
}
