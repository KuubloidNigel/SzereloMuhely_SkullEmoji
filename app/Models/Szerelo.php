<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait; 

class Szerelo extends Model implements Authenticatable 
{
    use AuthenticableTrait;
    use HasFactory;
    protected $table = "szerelos";

    protected $fillable = ['nev', 'azonosito', 'jelszo']; 


    public function szerelo(): HasMany
    {
        return $this->hasMany(Munkalap::class,'munkalap_id');
    }
    public function getAuthIdentifierName()
    {
        return 'azonosito'; // Adjust if your primary key name differs
    }

    public function getAuthIdentifier()
    {
        return $this->azonosito;
    }

    public function getAuthPassword()
    {
        return $this->jelszo; 
    } 

}
