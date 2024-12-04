<?php

namespace App\Services;

use App\Http\Requests\Artist\UpdateArtistRequest;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Collection;

class ArtistService
{
    private Artist $artist;

    public function update(UpdateArtistRequest $request): Artist
    {
        $data= [];

        if($request->has('nickname')){
            $data['nickname']=$request->input('nickname') ;
        }
        if($request->has('email')){
            $data['email']=$request->input('email');
        }
        if($request->has('purchase_count')){
            $data['purchased']=$request->input('purchase_count');
        }
        if($request->has('rating')){
            $data['rating']=$request->input('rating');
        }
        if($request->has('genre')){
            $data['genre']=$request->input('genre');
        }
        $this->artist->update($data);

        return $this->artist;
    }

    public function published(array $fields= ['id','nickname','email','purchased']): Collection
    {
      return  $artist  = Artist::query()
            ->select($fields)
            ->get();
    }

    public function setArtist(Artist $artist): ArtistService
    {
        $this->artist = $artist;
        return $this;
    }
}
