<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InformacaoGeral extends Model
{
    use HasFactory;
    protected $table = 'informacao';
    public $fillable = ['title', 'icone', 'filial_id', 'enable'];
    public $timestamps = true;

    public function filial()
    {
        return $this->hasMany(Filial::class);
    }
}
