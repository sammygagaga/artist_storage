<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable=[
      'price','description'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function artists():BelongsToMany
    {
        return $this->belongsToMany(Artist::class);
    }


}