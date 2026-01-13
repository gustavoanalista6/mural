<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalheCurso extends Model
{
    use HasFactory;

    protected $table = 'detalhe_curso';

    public $fillable = ['filial_id', 'title','icon','url_pdf'];
}
