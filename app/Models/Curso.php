<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'cursos';
    public $fillable = ['nome_curso', 'url_logo', 'filial_id', 'curso_id', 'deleted_at'];
    public $timestamps = true;
    protected $hidden = ['deleted_at'];
}
