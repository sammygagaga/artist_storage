<?php

namespace App\Http\Resources\Artist;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MinifiedArtistResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'nickname' => $this->nickname,
            'email'=>$this->email,
            'purchased'=>$this->purchased,
        ];
    }
}
