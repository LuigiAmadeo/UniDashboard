<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class AgendaDetail extends Model
{
    use HasFactory;

    public function Agenda(){
        return $this->belongsTo(Agenda::class);
    }
}
