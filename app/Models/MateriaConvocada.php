<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriaConvocada extends Model
{
    use HasFactory;

    protected $table = 'materias_convocadas';
    protected $guarded = [];

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}
