<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Munkafelvevo extends Model
{
    use HasFactory;
    protected $table = "munkafelvevos";
    protected $fillable = ['nev','azonosito','jelszo'];

    public function munkafelvevo(): HasMany
    {
        return $this->hasMany(Munkalap::class,'munkalap_id');
    }
}
