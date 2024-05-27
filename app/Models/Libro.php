<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'autor',
        'editorial',
        'edicion',
        'anio',
        'isbn',
        'idioma',
        // 'portada',
        'descripcion',
        'ubicacion',
        'estado',
        'categoria_id'
        // 'user_id',
        // 'editorial_id',
        // 'idioma_id',
        // 'ubicacion_id',
        // 'estado_id',
        // 'anio_id',
        // 'edicion_id',
        // 'isbn_id',
        // 'portada_id',
        // 'descripcion_id',
        // 'titulo_id',
        // 'autor_id',
    ];

    // public function categoria()
    // {
    //     return $this->belongsTo(Categoria::class);
    // }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function editorial()
    // {
    //     return $this->belongsTo(Editorial::class);
    // }

    // public function idioma()
    // {
    //     return $this->belongsTo(Idioma::class);
    // }

    // public function ubicacion()
    // {
    //     return $this->belongsTo(Ubicacion::class);
    // }

    // public function estado()
    // {
    //     return $this->belongsTo(Estado::class);
    // }

    // public function anio()
    // {
    //     return $this->belongsTo(Anio::class);
    // }

    // public function edicion()
    // {
    //     return $this->belongsTo(Edicion::class);
    // }

    // public function isbn()
    // {
    //     return $this->belongsTo(Isbn::class);
    // }

    // public function portada()
    // {
    //     return $this->belongsTo(Portada::class);
    // }

    // public function descripcion()
    // {
    //     return $this->belongsTo(Descripcion::class);
    // }
    
    // public function titulo()
    // {
    //     return $this->belongsTo(Titulo::class);
    // }

    // public function autor()
    // {
    //     return $this->belongsTo(Autor::class);
    // }

    // public function scopeTitulo($query, $titulo)
    // {
    //     if ($titulo) {
    //         return $query->where('titulo', 'LIKE', "%$titulo%");
    //     }
    // }

    // public function scopeAutor($query, $autor)
    // {
    //     if ($autor) {
    //         return $query->where('autor', 'LIKE', "%$autor%");
    //     }
    // }

    // public function scopeEditorial($query, $editorial)
    // {
    //     if ($editorial) {
    //         return $query->where('editorial', 'LIKE', "%$editorial%");
    //     }
    // }

    // public function scopeEdicion($query, $edicion)
    // {
    //     if ($edicion) {
    //         return $query->where('edicion', 'LIKE', "%$edicion%");
    //     }
    // }

    // public function scopeAnio($query, $anio)
    // {
    //     if ($anio) {
    //         return $query->where('anio', 'LIKE', "%$anio%");
    //     }
    // }
}
