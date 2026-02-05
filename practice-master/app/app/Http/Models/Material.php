<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    public function stores()
    {
        return $this->belongsTo(Store::class);
    }
}
