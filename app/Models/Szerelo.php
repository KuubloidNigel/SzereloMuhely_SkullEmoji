<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Szerelo extends Model
{
    use HasFactory;

    protected $fillable = ['nev','jelszo'];

    public function szerelo(): HasMany
    {
        return $this->hasMany(Munkalap::class,'munkalap_id');
    }
}