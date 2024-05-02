<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    use HasFactory;
    protected $table = 'cerificados';
    protected $primaryKey = 'id_certificado';
    protected $fillable = [
        'titulo_certificado',
        'archivo',
        'tipo_certificado',
        'fecha_certificado',
    ];
}
