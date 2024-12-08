<?php

namespace App\Http\Requests\Artist;

use App\Enum\ArtistsGenres;
use App\Http\Requests\ApiRequest;
use App\Services\DTO\CreateArtistData;
use Illuminate\Validation\Rules\Enum;


class StoreRequest extends ApiRequest
{

    public function rules(): array
    {
        return [
                'nickname'=> ['required', 'string', 'max:50'],
                'email'=>['required', 'string', 'email', 'max:50'],
                'purchase_count'=>['required', 'integer', 'min:0'],
                'rating'=>['required', 'numeric', 'min:0'],
                'genre'=>['required', new Enum(ArtistsGenres::class)]
        ];
    }

    public function data(): CreateArtistData
    {
      return  $data = CreateArtistData::from($this->validated());
    }
}
