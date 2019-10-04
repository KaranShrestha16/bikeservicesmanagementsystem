<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = [
        'uid', 'title', 'body'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
