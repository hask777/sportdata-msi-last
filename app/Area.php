<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Competition;

class Area extends Model
{
    protected $guarded = [];

    public function competition()
    {
        return $this->hasMany(Competition::class);
    }
}
