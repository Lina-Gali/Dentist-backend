<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RendezVous extends Model
{
    protected $table = 'rendez_vous';
    protected $fillable = [
        'patient_id',
        'date_heure',
        'motif',
        'status'
    ];
    public function patient ()
    {
        return $this->belongsTo((Patient::class));
    }
}
