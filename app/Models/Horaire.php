<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    use HasFactory;

    protected $fillable = ['HeureDebut','HeureFin','Type','feeder_id'];

    public function feeder()
    {
        return $this->belongsTo(Feeder::class);
    }
}
