<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dentiste extends Model
{
    
    function rendezvous()
    {
        return $this-> hasMany(RendezVous::class);
    }
}
