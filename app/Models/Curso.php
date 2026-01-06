<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';
    public $fillable = ['filial_id', 'title', 'subtitle', 'icon'];
    public $timestamps = true;
    
}
