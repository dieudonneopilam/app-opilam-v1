<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feeder extends Model
{
    protected $fillable = ['designation','ip','value','api','name'];
    use HasFactory;


    public function program()
    {
        return $this->hasOne(Program::class);
    }

    public function horaires()
    {
        return $this->hasMany(Horaire::class);
    }
}
