<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function universitys()
    {
        return $this->belongsToMany(university::class);
    }
}
