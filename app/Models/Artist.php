<?php

namespace App\Models;

use App\Enum\ArtistsGenres;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'nickname','email','purchase_count','rating','genre'
    ];

    protected $casts = [
        'genre'=> ArtistsGenres::class,
        'rating'=> 'int'
    ];


    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function purchases():HasMany
    {
        return $this->hasMany(Purchase::class);
    }



}
