<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Servico extends Model
{
    use HasFactory;
    
    protected $table = 'servicos';
    public $fillable = ['filial_id','title', 'value', 'first_free_exemption', 'is_monthly'];
    public $timestamps = true;
}

