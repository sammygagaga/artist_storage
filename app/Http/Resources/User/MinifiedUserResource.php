<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 *
 * @mixin \App\Models\User
 *
 */
class MinifiedUserResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name'=>$this->name,
            'email' => $this->email,
            'is_admin'=>$this->is_admin,
        ];
    }
}
