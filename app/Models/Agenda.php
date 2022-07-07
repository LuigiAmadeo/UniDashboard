<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    protected $fillable = ['user_id'];
    public function User(){
        return $this->belongsTo(User::class);
    }

    public function AgendaDetail(){
        return $this->hasMany(AgendaDetail::class);
    }
}
