<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoRed extends Model
{
    use HasFactory;
    protected $table ='evento_red';
    protected $primaryKey = 'id_evento';
    protected $fillable = [
        'id_sobre_mi',
        'id_redes',
    ];
}
