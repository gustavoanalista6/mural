<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InformacaoGeral extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'informacao';
    public $fillable = ['titulo', 'icone_informacao', 'filial_id', 'habilitado', 'deleted_at'];
    public $timestamps = true;

    public function filial()
    {
        return $this->hasMany(Filial::class);
    }
}
