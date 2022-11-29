<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $fillable = ['feeder_id','user_id','dateP'];
    use HasFactory;

    public function feeder()
    {
        return $this->belongsTo(Feeder::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
