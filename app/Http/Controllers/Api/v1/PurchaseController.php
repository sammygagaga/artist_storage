<?php

namespace App\Http\Controllers\Api\v1;

use App\Facades\Purchase as PurchaseFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\Purchase\PurchaseRequest;
use App\Http\Resources\Purchase\MinifiedPurchaseResource;
use App\Models\Purchase;
use App\Services\PurchaseService;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('add');
    }

    public function add(PurchaseRequest $request)
    {
        PurchaseFacade::setArtist($request->input('artistId'))
            ->add($request->input('purchases'));

        return responseCreated();
    }

    public function list(Purchase $purchase)
    {
        return new MinifiedPurchaseResource($purchase);
    }

    public function destroy(Purchase $purchase)
    {
        $purchase->delete();

        return responseDestroy();
    }

}
