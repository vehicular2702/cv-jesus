<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SobreMi extends Model
{
    use HasFactory;
    protected $table ='sobre_mi';
    protected $primaryKey = 'id_sobre_mi';
    protected $fillable = [
        'titulo_sobre_mi',
        'descripcion_sobre_mi',
        'github',
        'facebook',
        'whatsapp',
        'instagram',
        'linkedin',
    ];

    public function redes()
    {
        return $this->belongsToMany(RedSocial::class, 'evento_red', 'id_sobre_mi', 'id_redes');
    }
}
