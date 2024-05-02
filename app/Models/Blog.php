<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'id_blog';
    protected $fillable = [
        'titulo_blog',
        'imagen_blog',
        'version_blog',
        'nivel_blog',
        'tiempo_blog',
        'video_blog',
        'titulo_video',
        'descripcion_video'
    ];
}
