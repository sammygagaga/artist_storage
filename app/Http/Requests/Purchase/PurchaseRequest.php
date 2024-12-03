<?php

namespace App\Http\Requests\Purchase;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'artistId'=> ['required', 'exists:artists,id'],
            'purchases' => ['required', 'array'],
            'purchases.*.description' => ['required', 'string', 'min:10', 'max:255'],
            'purchases.*.amount' => ['required', 'integer', 'min:0'],
            'purchases.*.quantity' => ['required', 'integer', 'min:0'],

        ];
    }
}
