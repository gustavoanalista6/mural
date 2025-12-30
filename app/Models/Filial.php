<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Filial extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'filiais';
    public $fillable = ['nome_filial', 'foto_url_filial', 'deleted_at'];
    public $timestamps = true;
    protected $hidden = ['deleted_at'];
}
