<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetalheCurso extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = ['titulo', 'url_pdf', 'deleted_at'];

}
