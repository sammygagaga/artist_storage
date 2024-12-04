<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Artist\StoreRequest;
use App\Http\Requests\Artist\UpdateArtistRequest;
use App\Http\Resources\Artist\ArtistResource;
use App\Http\Resources\Artist\MinifiedArtistResource;
use App\Models\Artist;
use App\Facades\Artist as ArtistFacade;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only('store', 'update', 'destroy');


    }

    public function index()
    {
     return MinifiedArtistResource::collection(ArtistFacade::published());
    }
    public function show(Artist $artist)
    {
      return new ArtistResource($artist);
    }

    public function store(StoreRequest $request,Artist $artist)
    {
        $artist = auth()->user()->artists()->create($request->validated());

        return responseCreated();
    }

    public function update(UpdateArtistRequest $request, Artist $artist)
    {
       $artist=ArtistFacade::setArtist($artist)->update($request);

        return new ArtistResource($artist);
    }

    public function destroy(Artist $artist)
    {
        $artist->delete();
        return responseDestroy();
    }
}
