<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'priority',
        'day',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
