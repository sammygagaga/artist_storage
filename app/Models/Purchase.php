<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Purchase extends Model
{
    use HasFactory;

    protected $fillable=[
      'amount','description', 'quantity'
    ];



    public function artists():BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

}
