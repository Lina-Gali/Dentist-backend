<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\RendezVous; 
class Patient extends Model
{
    protected $fillable = ['nom', 'prenom', 'telephone', 'age', 'notes'];

    public function rendezvous()
    {
        return $this->hasMany(RendezVous::class);
    }
}
