<?php

namespace App\Http\Requests\Artist;

use App\Enum\ArtistsGenres;
use App\Http\Requests\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class UpdateArtistRequest extends ApiRequest
{

    public function rules(): array
    {
        return [
            'nickname'=> ['nullable','string', 'max:50'],
            'email'=>['nullable','string', 'email', 'max:50'],
            'purchased'=>['nullable','integer', 'min:0'],
            'rating'=>['nullable','numeric', 'min:0', 'max:5'],
            'genre'=>['required', new Enum(ArtistsGenres::class)]
        ];
    }
}
