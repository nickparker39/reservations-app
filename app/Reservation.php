<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservation extends Model
{
    protected $guarded = [];

    protected $dates = [
        'starts',
        'ends'
    ];

    public function getDollarAmountAttribute() : int
    {
        return $this->amount / 100;
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
