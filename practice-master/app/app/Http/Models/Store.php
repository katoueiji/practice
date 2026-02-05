<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function stores()
    {
        return $this->hasMany(Material::class);
    }
}
