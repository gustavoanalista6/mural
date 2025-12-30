<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servico extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $table = 'servicos';
    public $fillable = ['filial_id','descriminacao', 'valor', 'mensalidades_url_pdf', 'deleted_at'];
    public $timestamps = true;

    protected $hidden = ['deleted_at'];
}
