<?php

namespace App\Http\Controllers\Api\v1;

use App\Facades\Purchase;
use App\Http\Controllers\Controller;
use App\Http\Requests\Purchase\PurchaseRequest;
use App\Services\PurchaseService;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function add(PurchaseRequest $request)
    {

        Purchase::setArtist($request->input('artistId'))
            ->add($request->input('purchases'));

        return responseCreated();
    }
}
