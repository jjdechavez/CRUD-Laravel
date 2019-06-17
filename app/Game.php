<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Game extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'rate'
    ];

    protected $casts = [
        'created_at' => 'date:M-d-Y'
    ];
}
