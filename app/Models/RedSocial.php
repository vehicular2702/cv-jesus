<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedSocial extends Model
{
    use HasFactory;
    protected $table ='redes';
    protected $primaryKey = 'id_redes';
    protected $fillable = [
        'red_social',
        'id_sobre_mi',
    ];

    public function actividades()
    {
        return $this->SobreMi::belongsToMany(SobreMi::class, 'evento_red', 'id_sobre_mi', 'id_redes');
    }
}
